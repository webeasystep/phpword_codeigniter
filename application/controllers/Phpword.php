<?php
/* @property phpword_model $phpword_model */

class Phpword extends Front_end {

	function __construct(){
	  parent::__construct();
		$this->load->model('phpword_model');
    }

	function index()
	{
		$data['news'] = $this->phpword_model->get_news();
		$this->view('content/phpword', $data);
	}

	public function download()  {
		$this->load->library('Phpword');

		$news = $this->phpword_model->get_news();

		//  create new file and remove Compatibility mode from word title

		$phpWord = new \PhpOffice\PhpWord\PhpWord();
		$phpWord->getCompatibility()->setOoxmlVersion(14);
		$phpWord->getCompatibility()->setOoxmlVersion(15);

		$targetFile = "./global/uploads/";
		$filename = 'test.docx';

		// add style settings for the title and paragraph
		foreach($news as $n){

			$section = $phpWord->addSection();
			$section->addText($n['ne_title'], array('bold' => true,'underline' => 'single','name'=> 'arial','size' => 21,'color' =>'red'),array('align' => 'center', 'spaceAfter' => 10));
			$section->addTextBreak(1);
			if(!empty($n['ne_img'])){
				$section->addImage($targetFile.$n['ne_img'], array('align' => 'center','width'=>200, 'height'=>200));
			}
			$section->addTextBreak(1);
			$section->addText($n['ne_desc'], array('name'=> 'arial','size' => 14),array('align' => 'left', 'spaceAfter' => 100));
		}
		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		$objWriter->save($filename);
		// send results to browser to download
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.$filename);
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename));
		flush();
		readfile($filename);
		unlink($filename); // deletes the temporary file
		exit;
	}
}
/* End of file dashboard.php */
/* Location: ./system/application/modules/matchbox/controllers/dashboard.php */