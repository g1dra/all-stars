var id = 'UCmIhgkzIXbw3OvwvRRPZacg';
var key = 'AIzaSyCiPW85ALX_PtL0CTgOxE6fDep88mTTKeM';
$(document).ready(function () {
    $.get("https://www.googleapis.com/youtube/v3/channels", {
            part: 'contentDetails',
            id: id,
            key: key
        },
        function (channelData) {
            pid = channelData.items[0].contentDetails.relatedPlaylists.uploads;
            $.get("https://www.googleapis.com/youtube/v3/playlistItems", {
                    part: 'snippet',
                    maxResults: 10,
                    playlistId: pid,
                    key: key
                },
                function (videoData) {

                    $.each(videoData.items, function (i, item) {
                        console.log(item);
                        videoTitle = item.snippet.title;
                        videoPublished = item.snippet.publishedAt;
                        videoId = item.snippet.resourceId.videoId;
                        console.log(videoTitle, videoPublished, videoId);
                        videoElement = `<div class="gallery__item col-6 col-sm-4">
                                                <a href="https://www.youtube.com/watch?v=${videoId}" class="gallery__item-inner card">
                                                    <figure class="gallery__thumb">
                                                       <iframe width="100%" height="345" allowFullScreen="true" loop=1
                                                            src="https://www.youtube.com/embed/${videoId}">
                                                        </iframe>
                                                    </figure>
                                                    <div class="gallery__content card__content">
                                                            <span class="gallery__icon">
                                                                <span class="icon-camera"></span>
                                                            </span>
                                                        <div class="gallery__details">
                                                            <h4 class="gallery__name">${videoTitle}</h4>
                                                            <div class="gallery__date">${videoPublished}</div>
                                                        </div>
                                                    </div>
                                                 </a>
                                            </div>`;
                        $("#row").append(videoElement);
                    })
                });
        });
    
});
