    <style>
        input[type="checkbox"] {
            visibility: hidden;
        }

        .btn {
            padding: 3px;
            cursor: pointer;
        }

        .btn-outline-warning {
            background: white !important;
            color: black !important;
            border: 1px solid #2c7b88 !important;
            box-shadow: none !important;
            color: #2c7b88;
            border-radius: 3px !important;
        }

        .btn-outline-warning:hover {
            background-color: #2c7b88 !important;
            color: white !important;
            border: none !important;
            border-radius: 3px !important;
        }

        input[type="checkbox"]:checked+label {
            background-color: #2c7b88 !important;
            color: white !important;
            border: none !important;
            border-radius: 3px !important;
        }

        .container-fluid {
            text-align: center;
        }
    </style>


    <div class="container-fluid">
        <div class="">
            <div class="rounded d-flex justify-content-center " style="margin-top:20px">
                <input type="checkbox" class="btn-check" id="btn-check-id" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-id">ID</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-conversation_id" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-conversation_id">Conversation ID</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-created_at" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-created_at">Created at</label>
                &nbsp;
                <!-- Date Check On -->
                <input type="checkbox" class="btn-check" id="btn-check-date" autocomplete="off" value="hide" onchange="hide_table(this.id);" checked>
                <label class="btn btn-outline-warning" for="btn-check-date">Date</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-time" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-time">Time</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-timezone" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-timezone">Timezone</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-user_id" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-user_id">User ID</label>
                &nbsp;
                <!-- Username Check On -->
                <input type="checkbox" class="btn-check" id="btn-check-username" autocomplete="off" value="hide" onchange="hide_table(this.id);" checked>
                <label class="btn btn-outline-warning" for="btn-check-username">Username</label>
                &nbsp;
                <!-- Name Check On -->
                <input type="checkbox" class="btn-check" id="btn-check-name" autocomplete="off" value="hide" onchange="hide_table(this.id);" checked>
                <label class="btn btn-outline-warning" for="btn-check-name">Name</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-place" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-place">Place</label>
                &nbsp;
                <!-- Tweet Check On -->
                <input type="checkbox" class="btn-check" id="btn-check-tweet" autocomplete="off" value="hide" onchange="hide_table(this.id);" checked>
                <label class="btn btn-outline-warning" for="btn-check-tweet">Tweet</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-language" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-language">Language</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-mentions" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-mentions">Mentions</label>
            </div>
            <div class="rounded d-flex justify-content-center" style="margin-top:10px">
                <input type="checkbox" class="btn-check" id="btn-check-urls" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-urls">Urls</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-photos" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-photos">Photos</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-replies_count" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-replies_count">Replies Count</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-retweets_count" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-retweets_count">Retweets Count</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-likes_count" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-likes_count">Likes Count</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-hashtags" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-hashtags">Hashtags</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-cashtags" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-cashtags">Cashtags</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-link" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-link">Link</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-retweet" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-retweet">Retweet</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-quote_url" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-quote_url">Quote URL</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-video" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-video">Video</label>
            </div>
            <div class="rounded d-flex justify-content-center " style="margin-top:10px">
                <input type="checkbox" class="btn-check" id="btn-check-thumbnail" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-thumbnail">Thumbnail</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-near" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-near">Near</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-geo" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-geo">Geo</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-source" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-source">Source</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-user_rt_id" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-user_rt_id">User RT ID</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-user_rt" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-user_rt">User RT</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-retweet_id" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-retweet_id">Retweet ID</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-reply_to" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-reply_to">Reply to</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-retweet_date" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-retweet_date">Retweet Date</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-translate" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-translate">Translate</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-trans_src" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-trans_src">Trans Src</label>
                &nbsp;
                <input type="checkbox" class="btn-check" id="btn-check-trans_dest" autocomplete="off" value="show" onchange="hide_table(this.id);" unchecked>
                <label class="btn btn-outline-warning" for="btn-check-trans_dest">Trans Dest</label>
            </div>
        </div>
    </div>
    <div class="container-fluid vh-100">
        <div class="" style="margin-top:20px">

            <div class="col-md-12 p-5 bg-light">
                <div class="table-responsive">
                    <table id="table" class="table table-sm">
                        <tr>
                            <th id="btn-check-id_head" style="display: none;">ID</th>
                            <th id="btn-check-conversation_id_head" style="display: none;">Conversation ID</th>
                            <th id="btn-check-created_at_head" style="display: none;">Created at</th>
                            <th id="btn-check-date_head" style="display: table-cell;">Date</th>
                            <th id="btn-check-time_head" style="display: none;">Time</th>
                            <th id="btn-check-timezone_head" style="display: none;">Timezone</th>
                            <th id="btn-check-user_id_head" style="display: none;">User ID</th>
                            <th id="btn-check-username_head" style="display: table-cell;">Username</th>
                            <th id="btn-check-name_head" style="display: table-cell;">Name</th>
                            <th id="btn-check-place_head" style="display: none;">Place</th>
                            <th id="btn-check-tweet_head" style="display: table-cell;">Tweet</th>
                            <th id="btn-check-language_head" style="display: none;">Language</th>
                            <th id="btn-check-mentions_head" style="display: none;">Mentions</th>
                            <th id="btn-check-urls_head" style="display: none;">Urls</th>
                            <th id="btn-check-photos_head" style="display: none;">Photos</th>
                            <th id="btn-check-replies_count_head" style="display: none;">Replies Count</th>
                            <th id="btn-check-retweets_count_head" style="display: none;">Retweets Count</th>
                            <th id="btn-check-likes_count_head" style="display: none;">Likes Count</th>
                            <th id="btn-check-hashtags_head" style="display: none;">Hashtags</th>
                            <th id="btn-check-cashtags_head" style="display: none;">Cashtags</th>
                            <th id="btn-check-link_head" style="display: none;">Link</th>
                            <th id="btn-check-retweet_head" style="display: none;">Retweet</th>
                            <th id="btn-check-quote_url_head" style="display: none;">Quote URL</th>
                            <th id="btn-check-video_head" style="display: none;">Video</th>
                            <th id="btn-check-thumbnail_head" style="display: none;">Thumbnail</th>
                            <th id="btn-check-near_head" style="display: none;">Near</th>
                            <th id="btn-check-geo_head" style="display: none;">Geo</th>
                            <th id="btn-check-source_head" style="display: none;">Source</th>
                            <th id="btn-check-user_rt_id_head" style="display: none;">User RT ID</th>
                            <th id="btn-check-user_rt_head" style="display: none;">User RT</th>
                            <th id="btn-check-retweet_id_head" style="display: none;">Retweet ID</th>
                            <th id="btn-check-reply_to_head" style="display: none;">Reply to</th>
                            <th id="btn-check-retweet_date_head" style="display: none;">Retweet Date</th>
                            <th id="btn-check-translate_head" style="display: none;">Translate</th>
                            <th id="btn-check-trans_src_head" style="display: none;">Trans Src</th>
                            <th id="btn-check-trans_dest_head" style="display: none;">Trans Dest</th>
                        </tr>
                        @foreach($tweets as $data)
                        <tr>
                            <td class="btn-check-id" style="display: none;">">{{$data['conversation_id']}}</td>
                            <td class="btn-check-conversation_id" style="display: none;">{{$data['id']}}</td>
                            <td class="btn-check-created_at" style="display: none;">{{$data['created_at']}}</td>
                            <td class="btn-check-date" style="display: table-cell;">{{$data['date']}}</td>
                            <td class="btn-check-time" style="display: none;">{{$data['time']}}</td>
                            <td class="btn-check-timezone" style="display: none;">{{$data['timezone']}}</td>
                            <td class="btn-check-user_id" style="display: none;">{{$data['user_id']}}</td>
                            <td class="btn-check-username" style="display: table-cell;">@ {{$data['username']}}</td>
                            <td class="btn-check-name" style="display: table-cell;">{{$data['name']}}</td>
                            <td class="btn-check-place" style="display: none;">{{$data['place']}}</td>
                            <td class="btn-check-tweet" style="display: table-cell;">{{$data['tweet']}}</td>
                            <td class="btn-check-language" style="display: none;">{{$data['language']}}</td>
                            <td class="btn-check-mentions" style="display: none;">
                                <ul>
                                    @foreach($data['mentions'] as $mention)
                                    <li>@ {{$mention['screen_name']}} ({{$mention['name']}})</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="btn-check-urls" style="display: none;">
                                @foreach($data['urls'] as $url)
                                {{$url}} -
                                @endforeach
                            </td>
                            <td class="btn-check-photos" style="display: none;">
                                @foreach($data['photos'] as $photo)
                                {{$photo}} -
                                @endforeach
                            </td>
                            <td class="btn-check-replies_count" style="display: none;">{{$data['replies_count']}}</td>
                            <td class="btn-check-retweets_count" style="display: none;">{{$data['retweets_count']}}</td>
                            <td class="btn-check-likes_count" style="display: none;">{{$data['likes_count']}}</td>
                            <td class="btn-check-hashtags" style="display: none;">
                                @foreach($data['hashtags'] as $hashtag)
                                {{$hashtag}}
                                @endforeach
                            </td>
                            <td class="btn-check-cashtags" style="display: none;">
                                @foreach($data['cashtags'] as $cashtag)
                                {{$cashtag}}
                                @endforeach
                            </td>
                            <td class="btn-check-link" style="display: none;">{{$data['link']}}</td>
                            <td class="btn-check-retweet" style="display: none;">{{$data['retweet']}}</td>
                            <td class="btn-check-quote_url" style="display: none;">{{$data['quote_url']}}</td>
                            <td class="btn-check-video" style="display: none;">{{$data['video']}}</td>
                            <td class="btn-check-thumbnail" style="display: none;">{{$data['thumbnail']}}</td>
                            <td class="btn-check-near" style="display: none;">{{$data['near']}}</td>
                            <td class="btn-check-geo" style="display: none;">{{$data['geo']}}</td>
                            <td class="btn-check-source" style="display: none;">{{$data['source']}}</td>
                            <td class="btn-check-user_rt_id" style="display: none;">{{$data['user_rt_id']}}</td>
                            <td class="btn-check-user_rt" style="display: none;">{{$data['user_rt']}}</td>
                            <td class="btn-check-retweet_id" style="display: none;">{{$data['retweet_id']}}</td>
                            <td class="btn-check-reply_to" style="display: none;">
                                <ul>
                                    @foreach($data['reply_to'] as $info)
                                    <li>@ {{$info['screen_name']}} ({{$info['name']}})</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="btn-check-retweet_date" style="display: none;">{{$data['retweet_date']}}</td>
                            <td class="btn-check-translate" style="display: none;">{{$data['translate']}}</td>
                            <td class="btn-check-trans_src" style="display: none;">{{$data['trans_src']}}</td>
                            <td class="btn-check-trans_dest" style="display: none;">{{$data['trans_dest']}}</td>
                        </tr>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function hide_table(col_name) {
            var checkbox_val = document.getElementById(col_name).value;
            if (checkbox_val == "hide") {
                var all_col = document.getElementsByClassName(col_name);
                for (var i = 0; i < all_col.length; i++) {
                    all_col[i].style.display = "none";
                }
                document.getElementById(col_name + "_head").style.display = "none";
                document.getElementById(col_name).value = "show";
            } else {
                var all_col = document.getElementsByClassName(col_name);
                for (var i = 0; i < all_col.length; i++) {
                    all_col[i].style.display = "table-cell";
                }
                document.getElementById(col_name + "_head").style.display = "table-cell";
                document.getElementById(col_name).value = "hide";
            }
        }
    </script>