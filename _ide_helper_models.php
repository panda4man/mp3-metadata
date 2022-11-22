<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Mp3
 *
 * @property int $id
 * @property string|null $source_disk
 * @property string|null $source_path
 * @property string|null $dest_path
 * @property string|null $dest_disk
 * @property string|null $duration
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Mp3 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mp3 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Mp3 query()
 * @method static \Illuminate\Database\Eloquent\Builder|Mp3 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mp3 whereDestDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mp3 whereDestPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mp3 whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mp3 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mp3 whereSourceDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mp3 whereSourcePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Mp3 whereUpdatedAt($value)
 */
	class Mp3 extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

