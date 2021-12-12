<?php
include_once "BaseModel.php";

class UserModel extends BaseModel
{
    protected $table = "users";

    public function store($request)
    {
        $sql = "insert into $this->table (name,email,password,birthday,address,image) values (?,?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $request["name"]);
        $stmt->bindParam(2, $request["email"]);
        $stmt->bindParam(3, $request["password"]);
        $stmt->bindParam(4, $request["birthday"]);
        $stmt->bindParam(5, $request["address"]);
        $stmt->bindParam(6, $request["image"]);
        $stmt->execute();
    }

    public function update($request)
    {
        $sql = "update $this->table set name =? , email =?, password =?, birthday =?, address =?,image=? where id=?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $request["name"]);
        $stmt->bindParam(2, $request["email"]);
        $stmt->bindParam(3, $request["password"]);
        $stmt->bindParam(4, $request["birthday"]);
        $stmt->bindParam(5, $request["address"]);
        $stmt->bindParam(6, $request["image"]);
        $stmt->bindParam(7, $request["id"]);
        $stmt->execute();
    }

    public function checkLogin($email,$password)
    {
        $sql = "select * from $this->table where email = ? and password = ?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1,$email);
        $stmt->bindParam(2,$password);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    public function getByEmail($email)
    {
        $sql = "select * from $this->table where email=?";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1,$email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function search($key)
    {
        $sql = "select * from $this->table where name like '%$key%'";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}