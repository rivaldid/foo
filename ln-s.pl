#!/usr/bin/perl
use LWP::UserAgent;
my($userAgent, $request, $response, $status, $message, $url);

# set up the LWP User Agent and create the request
$userAgent = new LWP::UserAgent;
$request = new HTTP::Request POST => 'http://ln-s.net/home/api.jsp';
$request->content_type('application/x-www-form-urlencoded');

# encode the URL and add it to the url parameter in the request
die "Usage: ln-s.pl $url" if $#ARGV > 0 && $#ARGV < -1;
$url = $ARGV[0];
$url = URI::Escape::uri_escape($url);
$request->content("url=$url");

# make the request
$response = $userAgent->request($request);

# handle the response
if ($response->is_success) {
    my $reply = $response->content;
    1 while(chomp($reply));
    ($status, $message) = split(/ /,$reply, 2);
} else {
    ($status, $message) = split(/ /,$response->status_line, 2);
}

print "status: $status\nmessage: $message\n";
