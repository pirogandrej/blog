<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const IS_ADMIN = 1;
    const IS_NORMAL = 0;
    const IS_BANNED = 1;
    const IS_ACTIVE = 0;
    const PATH_AVATAR_IMAGE = 'img/upload/avatar/';
    const AVATAR_DEFAULT = 'no-user-image.jpg';

    protected $fillable = [
        'name', 'email',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public static function add($fields)
    {
        $user = new static;
        $user->fill($fields);
        $user->save();

        return $user;
    }

    public function edit($fields)
    {
        $this->fill($fields);

        $this->save();
    }

    public function generatePassword($password)
    {
        if($password != null)
        {
            $this->password = bcrypt($password);
        }
        $this->save();
    }

    public function remove()
    {
        Storage::delete(User::PATH_AVATAR_IMAGE . $this->image);
        $this->delete();
    }

    public function uploadAvatar($image)
    {
        if($image == null) { return; }

        if($this->avatar != null)
        {
            Storage::delete(User::PATH_AVATAR_IMAGE . $this->avatar);
        }

        $filename = str_random(10) . '.' . $image->extension();
        $image->storeAs(User::PATH_AVATAR_IMAGE, $filename);
        $this->avatar = $filename;
        $this->save();
    }

    public function getImage()
    {
        if($this->avatar == null)
        {
            return User::PATH_AVATAR_IMAGE . User::AVATAR_DEFAULT;
        }

        return User::PATH_AVATAR_IMAGE . $this->avatar;
    }

    public function makeAdmin()
    {
        $this->is_admin = User::IS_ADMIN;
        $this->save();
    }

    public function makeNormal()
    {
        $this->is_admin = User::IS_NORMAL;
        $this->save();
    }

    public function toggleAdmin($value)
    {
        if($value == null)
        {
            return $this->makeNormal();
        }

        return $this->makeAdmin();
    }

    public function ban()
    {
        $this->status = User::IS_BANNED;
        $this->save();
    }

    public function unban()
    {
        $this->status = User::IS_ACTIVE;
        $this->save();
    }

    public function toggleBan($value)
    {
        if($value == null)
        {
            return $this->unban();
        }

        return $this->ban();
    }


}




















