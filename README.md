## Now Playing

*This reference implementation provides a radio station with a working snippet of code to format and output the current song and artist for the Now Playing feature.*

The Now Playing feature from Zipwhip is an augmented version of the Keywords feature. When a listener sends a text that includes the keyword associated with the Now Playing feature, typically `nowplaying` or `now playing`. Zipwhip performs a Web Request to retrieve the current song playing from the radio stations web server.

Zipwhip expects the Song Title and Artist to be in a particular format:
```HTML
{Song Title}<br /><i>{Artist}</i>
```
