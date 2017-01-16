<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Photo extends Model
{
    use HasTags;
	protected $fillable = [
		'title', 'description', 'dateTaken', 'location', 'subjects', 'publish_date', 'section_id', 'issue_id', 'staffer_id'
	];

	protected $dates = ['dateTaken', 'publish_date'];

    /**
     * Returns the associated photographers
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function photographers(){
    	return $this->belongsToMany('App\Staffer');
    }

    /**
     * Returns the associated stories
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function stories(){
    	return $this->belongsToMany('App\Story');
    }

    /**
     * Returns the associated section
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function section()
    {
        return $this->belongsTo('App\Section');
    }

    /**
     * Returns the associated section
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function issue()
    {
        return $this->belongsTo('App\Issue');
    }

}
