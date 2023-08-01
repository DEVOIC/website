<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TeamRedirectController extends Controller
{

    public function redirectWebsite()
    {
        return Redirect::to("https://bento.me/thedevoic");
    }

    public function redirectMembers(string $id)
    {
        switch ($id) {
            case 'linkedin':
                return Redirect::to("https://linkedin.com/company/thedevoic");
            case 'instagram':
                return Redirect::to("https://instagram.com/thedevoic");
            case 'shivam':
                return Redirect::to("https://linkedin.com/in/whatshivamdo");
            case 'palak':
                return Redirect::to("https://linkedin.com/in/palakt433");
            case 'pragya':
                return Redirect::to("https://linkedin.com/in/pragyashri121");
            case 'athrva':
                return Redirect::to("https://linkedin.com/in/athrva-tomar-3b428825a");
            case 'shivansh':
                return Redirect::to("https://linkedin.com/in/gshivg");
            case 'shruti':
                return Redirect::to("https://www.linkedin.com/in/shruti-patel-750566225");
            default:
                # code...
                break;
        }
    }

    public function redirectDepartments(string $id){
        switch ($id) {
            case 'app':
                return Redirect::to("https://meet.google.com/psg-ipiq-ica");
            case 'web':
                return Redirect::to("https://meet.google.com/qnb-fkde-nhy");
            case 'design':
                return Redirect::to("https://meet.google.com/ejn-wont-jmz");
            case 'codepth':
                return Redirect::to("https://meet.google.com/dzf-szhh-moh");
            case 'creative':
                return Redirect::to("https://meet.google.com/fsg-hzim-mds");

            default:
                # code...
                break;
        }
    }
}
