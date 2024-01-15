// spotifyScript.js
console.log('Script started for Spotify.');

var cache = new LastFMCache();
console.log('Cache created.');

// Establish API connection
var lastfm = new LastFM({
    apiKey: '6606088cf99e9971505c3b7d9b94947a',
    apiSecret: '97079b865db1c1cfee6db006ccbf0cf8',
    cache: cache
});

// Display name of the user. Also works for other users. Hi, Lee!
var username = 'Tarikuzuma';

try {
    lastfm.user.getRecentTracks({ user: username, limit: 1 }, {
        success: function (data) {
            console.log('API request successful:', data);

            /* Use data. */
            var nowPlaying = data.recenttracks.track[0];
            var mostRecentTrack = data.recenttracks.track[0];

            if (nowPlaying["@attr"] && nowPlaying["@attr"].nowplaying === "true") {

                // Displays Text of Now Playing Artist.

                // console.log('Now Playing:', nowPlaying.name, 'by', nowPlaying.artist['#text']);
                var now_song = nowPlaying.name;
                var now_artist = nowPlaying.artist['#text'];
                var text_display = now_song + ' by ' + now_artist;

                console.log(text_display);
                document.getElementById("song_title").innerHTML = now_song;
                document.getElementById("song_author").innerHTML = now_artist;

            } else if (mostRecentTrack) {

                // If I'm not listening to anything, displays the most recent track I listened to.

                // console.log('Most Recently Played:', mostRecentTrack.name, 'by', mostRecentTrack.artist['#text']);
                var recent_song = mostRecentTrack.name;
                var recent_artist = mostRecentTrack.artist['#text'];
                var text_display = recent_song + ' by ' + recent_artist;

                console.log(text_display);
                document.getElementById("song_title").innerHTML = recent_song;
                document.getElementById("song_author").innerHTML = recent_artist;

            } else {
                console.log('An Error Occurred. No recent tracks.');
            }
        },
        error: function (code, message) {
            console.error('API request failed:', code, message);
        }
    });
} catch (err) {
    console.error(e);
}

console.log('Script ended.');
