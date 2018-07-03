<?php
class Post{
    //define the kinds of accessibility
    private $db;
    public function __construct () {
        $newDB = new DB();
        $this->db = $newDB->connect();
      }

      public function getPosts(){
        $stmt = $this->db->prepare("select * FROM blog");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
      }

      public function showPost($id){
        $stmt = $this->db->prepare("select * FROM blog where id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
      } 

      public function removePost($id){
        $stmt = $this->db->prepare("DELETE FROM blog WHERE id= :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
      }

      public function updatePost($id,$title,$body,$tags,$category){
        $stmt = $this->db->prepare("UPDATE blog SET title = :title , body= :body , category = :category , tags=:tags WHERE id= :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':body', $body);
        $stmt->bindParam(':tags', $tags);
        $stmt->bindParam(':category', $category);
        return $stmt->execute();
      }

      public function insertPost($title,$body,$tags,$category){
       $stmt = $this->db->prepare("INSERT INTO blog (title, body, tags ,category) VALUES (:title, :body, :tags , :category)");
       $stmt->bindParam(':title', $title);
       $stmt->bindParam(':body', $body);
       $stmt->bindParam(':tags', $tags);
       $stmt->bindParam(':category', $category);
        return $stmt->execute();
      }
      
}