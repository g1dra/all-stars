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
                    maxResults: 50,
                    playlistId: pid,
                    key: key
                },
                function (videoData) {

                    $.each(videoData.items, function (i, item) {
                        console.log(item);

                        var videoTitle = item.snippet.title;
                        var videoPublished = item.snippet.publishedAt;
                        var videoId = item.snippet.resourceId.videoId;
                        var date = new Date(videoPublished);
                        console.log(videoTitle, videoPublished, videoId, date);
                        videoElement = `<div class="gallery__item col-lg-4 for-mobile" style="width: 95%;">
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
                                                            <div class="gallery__date">${date.getFullYear()}-${date.getMonth()}-${date.getDay()} </div>
                                                        </div>
                                                    </div>
                                                 </a>
                                            </div>`;
                        $("#row").append(videoElement);
                    })
                });
        });
    
});
