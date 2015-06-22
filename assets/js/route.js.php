<?php
/*
* This file is part of enviroCar.
* 
* enviroCar is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* (at your option) any later version.
*
* enviroCar is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with enviroCar.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<script type="text/javascript">

    function toggleSharing() {
        if ($('#share-switch').prop('checked')) {
            $('#share-buttons').html("");
            $.getScript("assets/js/jquery.share.js", function () {
                addShareButtons();
            });
        } else {
            $('#share-switch').prop('checked', true);
        }
    }

    function addShareButtons() {
        $('#share-buttons').share({
            networks: ['googleplus', 'facebook', 'twitter'],
            theme: 'square'
        });
    }

    function shareOnFacebook() {
        $.getScript("assets/js/enviroCar.share.js", function () {
            FBShareOAuth();
        });
    }

    function shareOnTwitter() {
        $.getScript("assets/js/enviroCar.share.js", function () {
            tweetShare();
        });
    }

    function shareOnGoogle() {
        $.getScript("assets/js/enviroCar.share.js", function () {
            googleShare();
        });
    }

    $(function () {

        $('body').tooltip({
            selector: '[rel=tooltip]'
        });
    });


</script>
