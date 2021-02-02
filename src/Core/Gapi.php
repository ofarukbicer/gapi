<?php

namespace Gapi\Core;

class Gapi
{
    public $detail;
    
    public $followers;
    public $other_profile_followers;

    public $following;
    public $other_profile_following;

    public $gists;
    public $other_profile_gists;

    public $starred;
    public $other_profile_starred;

    public $subscriptions;
    public $other_profile_subscriptions;

    public $orgs;
    public $other_profile_orgs;

    public $repos;
    public $other_profile_repos;

    public $events;
    public $other_profile_events;
    
    private $opts = [
        "http" => [
            "method" => "GET",
            "header" => "Accept-language: tr\r\n" .
                "User-Agent: omerfarukbicer0446/gapi"
        ]
    ];

    public function __construct($username){
        $context = stream_context_create($this->opts);
        if (file_get_contents("https://api.github.com/users/$username", true, $context)) {
            $request = file_get_contents("https://api.github.com/users/$username", true, $context);
        }else {
            echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
        }
        $this->detail = json_decode($request);

        return $this;
    }

    public function followers($username = null)
    {
        if ($username == null) {
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/".$this->detail->login."/followers", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/".$this->detail->login."/followers", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $this->followers = json_decode($request);

            return $this;
        }else{
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/$username/followers", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/$username/followers", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $this->other_profile_followers = json_decode($request);

            return $this;
        }
    }

    public function following($username = null)
    {
        if ($username == null) {
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/".$this->detail->login."/following", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/".$this->detail->login."/following", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $this->following = json_decode($request);

            return $this;
        }else{
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/$username/following", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/$username/following", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $this->other_profile_following = json_decode($request);

            return $this;
        }
    }

    public function gists($username = null)
    {
        if ($username == null) {
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/".$this->detail->login."/gists", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/".$this->detail->login."/gists", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $this->gists = json_decode($request);

            return $this;
        }else{
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/$username/gists", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/$username/gists", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $this->other_profile_gists = json_decode($request);

            return $this;
        }
    }

    public function starred($username = null)
    {
        if ($username == null) {
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/".$this->detail->login."/starred", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/".$this->detail->login."/starred", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $this->starred = json_decode($request);
            return $this;
        }else{
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/$username/starred", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/$username/starred", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $this->other_profile_starred = json_decode($request);

            return $this;
        }
    }

    public function subscriptions($username = null)
    {
        if ($username == null) {
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/".$this->detail->login."/subscriptions", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/".$this->detail->login."/subscriptions", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $this->subscriptions = json_decode($request);

            return $this;
        }else{
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/$username/subscriptions", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/$username/subscriptions", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $request = file_get_contents("https://api.github.com/users/$username/subscriptions", true, $context);
            $this->other_profile_subscriptions = json_decode($request);

            return $this;
        }
    }

    public function orgs($username = null)
    {
        if ($username == null) {
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/".$this->detail->login."/orgs", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/".$this->detail->login."/orgs", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $this->orgs = json_decode($request);

            return $this;
        }else{
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/$username/orgs", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/$username/orgs", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $this->other_profile_orgs = json_decode($request);

            return $this;
        }
    }

    public function repos($username = null)
    {
        if ($username == null) {
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/".$this->detail->login."/repos", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/".$this->detail->login."/repos", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $this->repos = json_decode($request);

            return $this;
        }else{
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/$username/repos", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/$username/repos", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $this->other_profile_repos = json_decode($request);

            return $this;
        }
    }

    public function events($username = null)
    {
        if ($username == null) {
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/".$this->detail->login."/events", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/".$this->detail->login."/events", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $this->events = json_decode($request);

            return $this;
        }else{
            $context = stream_context_create($this->opts);
            if (file_get_contents("https://api.github.com/users/$username/events", true, $context)) {
                $request = file_get_contents("https://api.github.com/users/$username/events", true, $context);
            }else {
                echo "Çok fazla api isteği gönderdiniz Github API tarafından engellendiniz.";
            }
            $this->other_profile_events = json_decode($request);

            return $this;
        }
    }

    public function start($func, $username = null)
    {
        if ($func == "followers") {
            $this->followers($username);
        }
        if ($func == "following") {
            $this->following($username);
        }
        if ($func == "gists") {
            $this->gists($username);
        }
        if ($func == "starred") {
            $this->starred($username);
        }
        if ($func == "subscriptions") {
            $this->subscriptions($username);
        }
        if ($func == "repos") {
            $this->repos($username);
        }
        if ($func == "events") {
            $this->events($username);
        }

        return $this;
    }

    public function all_start($username = null)
    {
        $this->followers($username);
        $this->following($username);
        $this->gists($username);
        $this->starred($username);
        $this->subscriptions($username);
        $this->repos($username);
        $this->events($username);

        return $this;
    }
}
