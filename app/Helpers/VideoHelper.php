<?php namespace Helpers;

use Video;

class VideoHelper {

    protected $videoLink;
    protected $videoData;
    protected $storageRoute = '../assets/files/videos/';

    public function __construct( Video $video )
    {
        $this->video = $video;
    }

    public function setVideoPlayer( $id )
    {
        $this->videoData = $this->video->find( $id );
        if( $this->videoData->name )
        {
            $this->videoLink = $this->storageRoute . $this->videoData->name;
        }
    }

    public function getVideoData()
    {
        return $this->videoData;
    }


    public function getVideoPlayer()
    {
        if( ! is_null( $this->videoLink ) )
        {
                $video = "

                            <link href='//vjs.zencdn.net/4.5/video-js.css' rel='stylesheet'>
                            <script src='//vjs.zencdn.net/4.5/video.js'></script>

                            <video id='example_video_1' class='video-js vjs-default-skin'
                                controls preload='auto' width='853' height='354'
                                data-setup='{'example_option':true}'>
                                <source src='{$this->videoLink}.mp4' type='video/mp4' />
                                <source src='{$this->videoLink}.webm' type='video/webm' />
                                <source src='{$this->videoLink}.ogv' type='video/ogg' />
                            </video>

                         ";
        } else {
            $video = 'There was an error.';
        }

        return $video;
    }

}
