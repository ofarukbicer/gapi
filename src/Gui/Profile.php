<?php

namespace Gapi\Gui;
use Gapi\Core\Gapi;

class Profile
{
    private $cssfile = '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">';
    public $print;

    public function __construct($username)
    {
        echo $this->cssfile;
        $gapi = new Gapi($username);
        $gapi = $gapi->orgs();

        $this->print = '<div class="card" style="margin: 10px;width: 512px; height: 490px;">
                            <div class="card-content">
                                <div class="media">
                                <div class="media-left">
                                    <figure class="image is-48x48">
                                    <img src="'.$gapi->detail->avatar_url.'" alt="Profile Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">'.$gapi->detail->name.'</p>
                                    <p class="subtitle is-6">@'.$gapi->detail->login.'</p>
                                </div>
                                </div>
                                <div class="content">'.$gapi->detail->bio.'<br><br>';
                                if ($gapi->detail->company != null) {
        $this->print .= '<svg class="octicon octicon-organization" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M1.5 14.25c0 .138.112.25.25.25H4v-1.25a.75.75 0 01.75-.75h2.5a.75.75 0 01.75.75v1.25h2.25a.25.25 0 00.25-.25V1.75a.25.25 0 00-.25-.25h-8.5a.25.25 0 00-.25.25v12.5zM1.75 16A1.75 1.75 0 010 14.25V1.75C0 .784.784 0 1.75 0h8.5C11.216 0 12 .784 12 1.75v12.5c0 .085-.006.168-.018.25h2.268a.25.25 0 00.25-.25V8.285a.25.25 0 00-.111-.208l-1.055-.703a.75.75 0 11.832-1.248l1.055.703c.487.325.779.871.779 1.456v5.965A1.75 1.75 0 0114.25 16h-3.5a.75.75 0 01-.197-.026c-.099.017-.2.026-.303.026h-3a.75.75 0 01-.75-.75V14h-1v1.25a.75.75 0 01-.75.75h-3zM3 3.75A.75.75 0 013.75 3h.5a.75.75 0 010 1.5h-.5A.75.75 0 013 3.75zM3.75 6a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5zM3 9.75A.75.75 0 013.75 9h.5a.75.75 0 010 1.5h-.5A.75.75 0 013 9.75zM7.75 9a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5zM7 6.75A.75.75 0 017.75 6h.5a.75.75 0 010 1.5h-.5A.75.75 0 017 6.75zM7.75 3a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5z"></path></svg> 
        <a href="https://github.com/'.substr($gapi->detail->company,1).'">'.$gapi->detail->company.'</a><br>';
                                }
                                if ($gapi->detail->location != null) {
        $this->print .= '<svg class="octicon octicon-location" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M11.536 3.464a5 5 0 010 7.072L8 14.07l-3.536-3.535a5 5 0 117.072-7.072v.001zm1.06 8.132a6.5 6.5 0 10-9.192 0l3.535 3.536a1.5 1.5 0 002.122 0l3.535-3.536zM8 9a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                '.$gapi->detail->location.'<br>';
                                }
                                if ($gapi->detail->blog != null) {
        $this->print .= '<svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path></svg>
                                <a href="'.$gapi->detail->blog.'">'.$gapi->detail->blog.'</a><br>';
                                }
                                if ($gapi->detail->twitter_username != null) {
        $this->print .= '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 273.5 222.3" height="16" width="16"><path d="M273.5 26.3a109.77 109.77 0 0 1-32.2 8.8 56.07 56.07 0 0 0 24.7-31 113.39 113.39 0 0 1-35.7 13.6 56.1 56.1 0 0 0-97 38.4 54 54 0 0 0 1.5 12.8A159.68 159.68 0 0 1 19.1 10.3a56.12 56.12 0 0 0 17.4 74.9 56.06 56.06 0 0 1-25.4-7v.7a56.11 56.11 0 0 0 45 55 55.65 55.65 0 0 1-14.8 2 62.39 62.39 0 0 1-10.6-1 56.24 56.24 0 0 0 52.4 39 112.87 112.87 0 0 1-69.7 24 119 119 0 0 1-13.4-.8 158.83 158.83 0 0 0 86 25.2c103.2 0 159.6-85.5 159.6-159.6 0-2.4-.1-4.9-.2-7.3a114.25 114.25 0 0 0 28.1-29.1" fill="currentColor"></path></svg>
                                <a href="https://twitter.com/'.$gapi->detail->twitter_username.'">@'.$gapi->detail->twitter_username.'</a><br>';
                                }
        $this->print .= '<br><b>Organizations</b><br><div style="display:flex;margin-top:5px">';
        foreach ($gapi->orgs as $value) {
            $this->print .= '<a href="https://github.com/'.$value->login.'"><figure class="image is-48x48" style="border-radius:4px;border:1px solid #eee;margin:0;margin-right:5px;">
            <img src="'.$value->avatar_url.'" alt="'.$value->login.'" style="border-radius:4px;">
            </figure></a>';
        }
        $this->print .= '</div><br><br>
                            <span class="icon-text" style="display:inline-flex;margin-right:5px;">
                                <span class="icon" style="margin-right:5px;">
                                <svg aria-label="Repository" class="octicon octicon-repo flex-shrink-0" viewBox="0 0 16 16" version="1.1" width="16" height="16" role="img"><path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 014.5 0h8.75a.75.75 0 01.75.75v12.5a.75.75 0 01-.75.75h-2.5a.75.75 0 110-1.5h1.75v-2h-8a1 1 0 00-.714 1.7.75.75 0 01-1.072 1.05A2.495 2.495 0 012 11.5v-9zm10.5-1V9h-8c-.356 0-.694.074-1 .208V2.5a1 1 0 011-1h8zM5 12.25v3.25a.25.25 0 00.4.2l1.45-1.087a.25.25 0 01.3 0L8.6 15.7a.25.25 0 00.4-.2v-3.25a.25.25 0 00-.25-.25h-3.5a.25.25 0 00-.25.25z"></path></svg>
                                </span>
                                <span> Repositories <b>'.$gapi->detail->public_repos.'</b></span>
                            </span>
                            <span class="icon-text" style="display:inline-flex;margin-right:5px;">
                                <span class="icon" style="margin-right:5px;">
                                <svg class="octicon octicon-code-square UnderlineNav-octicon d-none d-md-inline-block" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M1.75 1.5a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25V1.75a.25.25 0 00-.25-.25H1.75zM0 1.75C0 .784.784 0 1.75 0h12.5C15.216 0 16 .784 16 1.75v12.5A1.75 1.75 0 0114.25 16H1.75A1.75 1.75 0 010 14.25V1.75zm9.22 3.72a.75.75 0 000 1.06L10.69 8 9.22 9.47a.75.75 0 101.06 1.06l2-2a.75.75 0 000-1.06l-2-2a.75.75 0 00-1.06 0zM6.78 6.53a.75.75 0 00-1.06-1.06l-2 2a.75.75 0 000 1.06l2 2a.75.75 0 101.06-1.06L5.31 8l1.47-1.47z"></path></svg>
                                </span>
                                <span> Gists <b>'.$gapi->detail->public_gists.'</b></span>
                            </span>
                            <span class="icon-text" style="display:inline-flex;margin-right:5px;">
                                <span class="icon" style="margin-right:5px;">
                                <svg class="octicon octicon-people text-gray-light" height="16" viewBox="0 0 16 16" version="1.1" width="16" aria-hidden="true"><path fill-rule="evenodd" d="M5.5 3.5a2 2 0 100 4 2 2 0 000-4zM2 5.5a3.5 3.5 0 115.898 2.549 5.507 5.507 0 013.034 4.084.75.75 0 11-1.482.235 4.001 4.001 0 00-7.9 0 .75.75 0 01-1.482-.236A5.507 5.507 0 013.102 8.05 3.49 3.49 0 012 5.5zM11 4a.75.75 0 100 1.5 1.5 1.5 0 01.666 2.844.75.75 0 00-.416.672v.352a.75.75 0 00.574.73c1.2.289 2.162 1.2 2.522 2.372a.75.75 0 101.434-.44 5.01 5.01 0 00-2.56-3.012A3 3 0 0011 4z"></path></svg>
                                </span>
                                <span> <b>'.$gapi->detail->followers.'</b> followers · <b>'.$gapi->detail->following.'</b> following</span>
                            </span>
                            </div>
                        </div>
                        </div>';
      return $this;
    }
}
