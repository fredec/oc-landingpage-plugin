<?php namespace Diveramkt\LandingPage;

use Backend;
use Illuminate\Support\Facades\Event;
use System\Classes\PluginBase;
use Diveramkt\LandingPage\Models\Event as EventLandingPage;

class Plugin extends PluginBase
{
    public $require = [
        'Martin.Forms'
    ];

    public function registerComponents()
    {
    	return [
    		'Diveramkt\LandingPage\Components\EbooksLandingPage' => 'EbooksLandingPage',
            'Diveramkt\LandingPage\Components\EbooksList' => 'Ebooks',
            'Diveramkt\LandingPage\Components\CoursesLandingPage' => 'CoursesLandingPage',
            'Diveramkt\LandingPage\Components\CourseTestmonialsList' => 'CourseTestmonialsList',
            'Diveramkt\LandingPage\Components\CoursesList' => 'Courses',
            'Diveramkt\LandingPage\Components\EventsLandingPage' => 'EventsLandingPage',
            'Diveramkt\LandingPage\Components\ExtraPagesList' => 'ExtrapagesList',
            'Diveramkt\LandingPage\Components\ExtraPagesLandingPage' => 'ExtraPagesLandingPage',
            'Diveramkt\LandingPage\Components\ExtraPagesLPContent' => 'ExtraPagesLPContent'
    	];
    }

    public function registerPageSnippets()
    {
    	return [
    		'Diveramkt\LandingPage\Components\EbooksLandingPage' => 'EbooksLandingPage',
            'Diveramkt\LandingPage\Components\EbooksList' => 'Ebooks',
            'Diveramkt\LandingPage\Components\CoursesLandingPage' => 'CoursesLandingPage',
            'Diveramkt\LandingPage\Components\CourseTestmonialsList' => 'CourseTestmonialsList',
            'Diveramkt\LandingPage\Components\CoursesList' => 'Courses',
            'Diveramkt\LandingPage\Components\EventsLandingPage' => 'EventsLandingPage',
            'Diveramkt\LandingPage\Components\ExtraPagesList' => 'ExtrapagesList',
            'Diveramkt\LandingPage\Components\ExtraPagesLandingPage' => 'ExtraPagesLandingPage',
            'Diveramkt\LandingPage\Components\ExtraPagesLPContent' => 'ExtraPagesLPContent'
    	];
    }


    public function boot()
    {    
        //Set the group name to Register the contact (ebook, event, etc)   
        Event::listen('martin.forms.beforeSaveRecord', function (&$formdata, $component) {
            $group = @$formdata['group'];
            $email_subject = @$formdata['email_subject'];
            $type = @$formdata['email_subject'];

            if ($group != '')
                $component->setProperty('group', $group);
            
            if ($email_subject != '') {
                $component->setProperty('mail_resp_subject', $email_subject);
            }

            if ($type == 'ebook') {
                $component->setProperty('mail_template', 'diveramkt.landingpage::ebook.notification');
                $component->setProperty('mail_resp_template', 'diveramkt.landingpage::ebook.autoresponse');
            }

        });
    }

    public function registerMailTemplates() {
        return [
            'diveramkt.landingpage::mail.notification' => 'Notificação padrão',
            'diveramkt.landingpage::mail.autoresponse' => 'Resposta automática padrão',
            'diveramkt.landingpage::ebook.notification' => 'Notificar quando é feito o download de um ebook',
            'diveramkt.landingpage::ebook.autoresponse' => 'Resposta automática quando é feito o download de um ebook',
            'diveramkt.landingpage::event.notification' => 'Notificar quando é feita a inscrição a algum evento',
            'diveramkt.landingpage::event.autoresponse' => 'Resposta automática quando é feita a inscrição em algum evento',
            'diveramkt.landingpage::course_interest.notification' => 'Notificar quando alguém tem interesse no curso',
            'diveramkt.landingpage::course_interest.autoresponse' => 'Resposta automática quando alguém cadastra email interessado em curso que não tem inscrições abertas',
        ];
    }
}
