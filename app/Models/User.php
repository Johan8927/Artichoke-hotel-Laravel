<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'civility',
        'firstName',
        'lastName',
        'password',
        'address',
        'ZIP_code',
        'city',
        'country',
        'phone_number',
        'email',
        'admin_status',
        'client_status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public static function create(array $array)
    {
        return User::query()->create($array);
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Getter and Setter for Civility
    public function getCivility()
    {
        return $this->Civility;
    }

    public function setCivility($Civility)
    {
        $this->Civility = $Civility;
        return $this;
    }

    // Getter and Setter for FirstName
    public function getFirstName()
    {
        return $this->FirstName;
    }

    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    // Getter and Setter for LastName
    public function getLastName()
    {
        return $this->LastName;
    }

    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    // Getter and Setter for Address
    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    // Getter and Setter for ZIP_code
    public function getZIPCode()
    {
        return $this->ZIP_code;
    }

    public function setZIPCode($ZIP_code)
    {
        $this->ZIP_code = $ZIP_code;
        return $this;
    }

    // Getter and Setter for City
    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    // Getter and Setter for Country
    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    // Getter and Setter for Phone Number
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
        return $this;
    }

    // Getter and Setter for Email
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    // Getter and Setter for Admin Status
    public function getAdminStatus()
    {
        return $this->admin_status;
    }

    public function setAdminStatus($admin_status)
    {
        $this->admin_status = $admin_status;
        return $this;
    }

    // Getter and Setter for Client Status
    public function getClientStatus()
    {
        return $this->client_status;
    }

    public function setClientStatus($client_status)
    {
        $this->client_status = $client_status;
        return $this;
    }
}
