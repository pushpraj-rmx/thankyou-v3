<?php 

// Helper function to get common data
use App\Models\{Logo, SocialMedia, Section};
function getCommonData()
{
    return [
        'logo' => Logo::first(),
        'socialMediaLinks' => SocialMedia::all(),
        'sections' => Section::all(),
    ];
}
