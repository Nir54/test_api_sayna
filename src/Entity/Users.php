<?php

namespace App\Entity;

use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UsersRepository;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer",name="users_id")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $users_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $users_mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $users_login;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $users_password;

    /**
     * @ORM\Column(type="text")
     */
    private $users_token;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $users_date_creat;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $users_date_modif;

    /**
     * Users constructor.
     * @throws \Exception
     */
    public function __construct()
    {
        // $this->users_date_creat = new \DateTime('NOW', new \DateTimeZone('Africa/Nairobi'));
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsersName(): ?string
    {
        return $this->users_name;
    }

    public function setUsersName(string $users_name): self
    {
        $this->users_name = $users_name;

        return $this;
    }

    public function getUsersMail(): ?string
    {
        return $this->users_mail;
    }

    public function setUsersMail(string $users_mail): self
    {
        $this->users_mail = $users_mail;

        return $this;
    }

    public function getUsersLogin(): ?string
    {
        return $this->users_login;
    }

    public function setUsersLogin(string $users_login): self
    {
        $this->users_login = $users_login;

        return $this;
    }

    public function getUsersPassword(): ?string
    {
        return $this->users_password;
    }

    public function setUsersPassword(string $users_password): self
    {
        $this->users_password = $users_password;

        return $this;
    }

    public function getUsersToken(): ?string
    {
        return $this->users_token;
    }

    public function setUsersToken(string $users_token): self
    {
        $this->users_token = $users_token;

        return $this;
    }

    public function getUsersDateCreat(): ?DateTimeImmutable
    {
        return $this->users_date_creat;
    }

    public function setUsersDateCreat(\DateTimeImmutable $users_date_creat): self
    {
        $this->users_date_creat = $users_date_creat;

        return $this;
    }

    public function getUsersDateModif(): ?\DateTimeInterface
    {
        return $this->users_date_modif;
    }

    public function setUsersDateModif(?\DateTimeInterface $users_date_modif): self
    {
        $this->users_date_modif = $users_date_modif;

        return $this;
    }
}
