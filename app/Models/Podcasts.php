<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Podcasts
 *
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $audio_path
 * @property string $img_path
 * @property string $audio_format
 * @property string $description
 * @property string $audio_length
 * @property string $tags
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PodcastsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcasts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcasts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcasts query()
 * @method static \Illuminate\Database\Eloquent\Builder|Podcasts whereAudioFormat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcasts whereAudioLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcasts whereAudioPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcasts whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcasts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcasts whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcasts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcasts whereImgPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcasts whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcasts whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Podcasts whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Podcasts extends Model
{
    use HasFactory;
}