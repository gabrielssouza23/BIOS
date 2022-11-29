<?php

class Empresario{
    private $id;
    private $name;
    private $email;
    private $password;
    private $cnpj;
   // private $photo;
   // private $document;
    private $message;

    /**
     * @return mixed
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    
    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string|null
     */
    public function getDocument(): ?string
    {
        return $this->document;
    }

    /**
     * @param string|null $document
     */
    public function setDocument(?string $document): void
    {
        $this->document = $document;
    }

    public function __construct(
        int $id = NULL,
        string $name = NULL,
        string $email = NULL,
        string $password = NULL,
        string $document= NULL
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->document = $document;
    }

    /**
     * @return array|false
     */
    public function selectAll ()
    {
        $query = "SELECT * FROM users";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() == 0){
            return false;
        } else {
            return $stmt->fetchAll();
        }
    }

    /**
     * @return bool
     */
    public function findById() : bool
    {
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":id",$this->id);
        $stmt->execute();

        if($stmt->rowCount() == 0){
            return false;
        } else {
            $user = $stmt->fetch();
            $this->name = $user->name;
            $this->email = $user->email;
            return true;
        }
    }

    /**
     * @param string $email
     * @return bool
     */
    public function findByEmail(string $email) : bool
    {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        if($stmt->rowCount() == 1){
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function validate (string $email, string $password) : bool
    {
        $query = "SELECT * FROM users WHERE email LIKE :email";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        if($stmt->rowCount() == 0){
            $this->message = "Usuário e/ou Senha não cadastrados!";
            return false;
        } else {
            $user = $stmt->fetch();
            if(!password_verify($password, $user->password)){
                $this->message = "Usuário e/ou Senha não cadastrados!";
                return false;
            }
        }
        $this->id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->message = "Vamos direto para o APP!";

        $arrayUser = [
            "id" => $this->id,
            "name" => $this->name,
            "email" => $this->email
        ];

  }
}