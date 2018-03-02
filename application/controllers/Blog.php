<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->model('blog_model');

  }

	public function index( $blog_ID )	{
      $data['blog'] = $this->blog_model->blog( $blog_ID );
      $this->load->template( 'baca_blog', $data );

	}

  public function post()	{
    $this->load->template( 'postblog' );
	}

	public function submit()	{
    $this->blog_model->submit();
    redirect("/");
	}
  public function contact()
	{
		$this->load->template('tampilan/contact');
	}

  public function login()
  	{
  		$this->load->template('tampilan/login');
  	}

  public function delete( $blog_ID )
  {
    $this->blog_model->delete($blog_ID);
    redirect('welcome');
  }

  public function edit( $blog_ID )
  {
    $data = $this->blog_model->blog($blog_ID);
    $this->load->template('editblog',$data);
  }

  public function subedit( $blog_ID )
  {
    $data = $this->blog_model->edit($blog_ID);
    redirect('welcome');
  }

}
