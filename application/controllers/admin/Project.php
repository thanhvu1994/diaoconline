<?php

class Project extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $config['upload_path']          = './uploads/projects';
        $config['allowed_types']        = 'jpg|png';
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);

        if (!file_exists('./uploads/projects')) {
            mkdir('./uploads/projects', 0777, true);
        }
    }

    public function index()
    {
        $data['title'] = 'Quản Lý Dự Án';
        $data['template'] = 'admin/project/index';
        $data['models'] = $this->projects->get_model();
		$this->load->view('admin/layouts/index', $data);
    }

    public function create() {
        $data['title'] = 'Tạo Dự Án';
    	$data['template'] = 'admin/project/form';
        $data['link_submit'] = base_url('admin/project/create');
        $data['scenario'] = 'create';

        if (isset($_POST['Project'])) {
            $data_insert = $_POST['Project'];
            $image = '';
            if (isset($_FILES['Project']['name']) && !empty($_FILES['Project']['name'])) {
                $files = $_FILES;
                $_FILES['featured_image']['name'] = $files['Project']['name']['featured_image'];
                $_FILES['featured_image']['type'] = $files['Project']['type']['featured_image'];
                $_FILES['featured_image']['tmp_name'] = $files['Project']['tmp_name']['featured_image'];
                $_FILES['featured_image']['error'] = $files['Project']['error']['featured_image'];
                $_FILES['featured_image']['size'] = $files['Project']['size']['featured_image'];
                if (!$this->upload->do_upload('featured_image')) {
                    $data['error'] = $this->upload->display_errors();
                } else {
                    $uploadData = $this->upload->data();
                    $image = '/uploads/projects/'. $uploadData['file_name'];
                }
            }
            $data_insert['featured_image'] = $image;

            $this->projects->set_model($data_insert);
            redirect('admin/project/index', 'refresh');
        }
		$this->load->view('admin/layouts/index', $data);
    }

    public function update($id) {
        $data['title'] = 'Cập Nhật Dự Án';
        $data['template'] = 'admin/project/form';
        $model = $this->projects->get_model(['id' => $id]);
        $data['model'] = $model;
        $data['link_submit'] = base_url('admin/project/update/'.$id);
        $data['scenario'] = 'update';

        $image = $model->featured_image;

        if (isset($_POST['Project'])) {
            $data_insert = $_POST['Project'];

            if (isset($_POST['remove_img']) && $_POST['remove_img'] == true) {
                if (is_file('.'.$image)) {
                    unlink('.'.$image);
                }
                $data_insert['featured_image'] = '';
            } else {
                if (isset($_FILES['Project']['name']) && !empty($_FILES['Project']['name'])) {
                    $files = $_FILES;
                    $_FILES['featured_image']['name'] = $files['Project']['name']['featured_image'];
                    $_FILES['featured_image']['type'] = $files['Project']['type']['featured_image'];
                    $_FILES['featured_image']['tmp_name'] = $files['Project']['tmp_name']['featured_image'];
                    $_FILES['featured_image']['error'] = $files['Project']['error']['featured_image'];
                    $_FILES['featured_image']['size'] = $files['Project']['size']['featured_image'];
                    if (!$this->upload->do_upload('featured_image')) {
                        $data['error'] = $this->upload->display_errors();
                    } else {
                        $uploadData = $this->upload->data();
                        $image = '/uploads/projects/'. $uploadData['file_name'];
                        $data_insert['featured_image'] = $image;
                    }
                }
            }

            $this->projects->update_model($id, $data_insert);
            redirect('admin/project/index', 'refresh');
        }

        $this->load->view('admin/layouts/index', $data);
    }

    public function delete($id) {
        $model = $this->projects->get_model(['id' => $id]);

        if (count($model) > 0) {
            $model->delete_model();
            echo 1;
        }
        echo 0;
    }

    public function bulkDelete() {
        $deleteItems = isset($_POST['select']) ? $_POST['select'] : [];

        if (!empty($deleteItems)) {
            $query = $this->db->query("SELECT * FROM ci_projects WHERE id in(".implode(',', $deleteItems).")");
            $models = $query->result('Projects');
            foreach ($models as $model) {
                $model->delete_model();
            }
        }
        redirect('admin/project/index', 'refresh');
    }
}