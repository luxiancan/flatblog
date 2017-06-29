<?php
require_once('./libs/Model/uploadModel.class.php');
require_once('./libs/Model/imageModel.class.php');
class avatarModel{
    public $user_table = 'users';
    public $avatar_path = './static/img/head_img';

    public function avatar_upload($id){
        if(!empty($_FILES) && !empty($id)){
            $uploadobj = new upload('fileavatar',$this->avatar_path);
            $dest = $uploadobj->uploadFile();
            $imageobj = new Image($dest);
            $imageobj->thumb(120,120);
            $imageobj->save($dest);
            $this->del_user_old_avatar($id);
            $newName = $uploadobj->get_new_file_name();
            $this->update_user_avatar($id,$newName);
            return true;
        }else{
            return false;
        }
    }

    public function del_user_old_avatar($id){
        if(!empty($id)){
            $sql = "select avatar from ".$this->user_table." where id=".$id;
            if(!empty(DB::findResult($sql))){
                $user_old_avatar = DB::findResult($sql);
                unlink($this->avatar_path.'/'.$user_old_avatar);
            }
        }
    }

    public function update_user_avatar($id,$new_name){
        if(!empty($id) && !empty($new_name)){
            $data = array(
                'avatar'=>$new_name,
                'updated_at'=>time()
            );
            DB::update($this->user_table,$data,' id='.$id);
        }
    }
}
