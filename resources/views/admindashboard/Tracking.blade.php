{{-- @extends('admindashboard.layout.app')

@section('content')
<style>
    /* Ensure the body takes full height */
    body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    /* Center the content container */
    .center-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Full viewport height */
    }

    /* Style for the input and button */
    .track-form {
        text-align: center;
    }

    .track-form input[type="text"] {
        padding: 10px;
        margin-right: 10px;
        font-size: 16px;
    }

    .track-form input[type="button"] {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }
</style>

<div class="center-container">
    <div class="track-form">
        <!-- Tracking number input box. -->
        <input type="text" id="YQNum" maxlength="50" placeholder="Enter tracking number"/>
        <!-- The button is used to call script method. -->
        <input type="button" value="TRACK" onclick="doTrack()"/>
    </div>
</div>

<!-- Container to display the tracking result. -->
<div id="YQContainer"></div>

<!-- Script code can be put at the bottom of the page, wait until the page is loaded then execute. -->
<script type="text/javascript" src="//www.17track.net/externalcall.js"></script>
<script type="text/javascript">
function doTrack() {
    var num = document.getElementById("YQNum").value;
    if(num===""){
        alert("Enter your number.");
        return;
    }
    YQV5.trackSingle({
        // Required, specify the container ID of the carrier content.
        YQ_ContainerId: "YQContainer",
        // Optional, specify tracking result height, max height 800px, default is 560px.
        YQ_Height: 560,
        // Optional, select carrier, default to auto identify.
        YQ_Fc: "0",
        // Optional, specify UI language, default language is automatically detected based on the browser settings.
        YQ_Lang: "en",
        // Required, specify the number needed to be tracked.
        YQ_Num: num
    });
}
</script> --}}

{{-- @endsection --}}

@extends('admindashboard.layout.app')

@section('content')
<style>
    /* Ensure the body takes full height */
     body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, sans-serif;
    }


    /* Center the content container */
   .center-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Full viewport height */
    }

    /* Style for the input and button */
   .track-form {
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .track-form input[type="text"] {
        padding: 10px;
        margin-right: 10px;
        font-size: 16px;
    }

    .track-form input[type="button"] {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }
.track-form input[type="button"]
    {    padding: 9px 108px;
        margin-left: -1rem;
        margin-top:1rem;

    }

    /* Modal styles */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<div class="center-container">
    <div class="track-form">
        <!-- Tracking number input box. -->
        <input type="text" id="YQNum" maxlength="50" placeholder="Enter tracking number"/>
        <!-- The button is used to call script method. -->
        <input  class="btn btn-primary" type="button" value="ACCEPT" onclick="doTrack()"/>
        <input  class="btn btn-danger" type="button" value="CANCEL" onclick="clearInput()"/>

    </div>
</div>

<!-- Modal Structure -->
<div id="trackingModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div id="YQContainer"></div>
    </div>
</div>

<!-- Script code can be put at the bottom of the page, wait until the page is loaded then execute. -->
<script type="text/javascript" src="//www.17track.net/externalcall.js"></script>
<script type="text/javascript">
function doTrack() {
    var num = document.getElementById("YQNum").value;
    if (num === "") {
        alert("Enter your number.");
        return;
    }

    YQV5.trackSingle({
        // Required, specify the container ID of the carrier content.
        YQ_ContainerId: "YQContainer",
        // Optional, specify tracking result height, max height 800px, default is 560px.
        YQ_Height: 560,
        // Optional, select carrier, default to auto identify.
        YQ_Fc: "0",
        // Optional, specify UI language, default language is automatically detected based on the browser settings.
        YQ_Lang: "en",
        // Required, specify the number needed to be tracked.
        YQ_Num: num
    });

    // Show the modal
    document.getElementById('trackingModal').style.display = 'block';
}

function clearInput() {
    document.getElementById("YQNum").value = "";
}

function closeModal() {
    document.getElementById('trackingModal').style.display = 'none';
}

// Close the modal if the user clicks anywhere outside of the modal
window.onclick = function(event) {
    var modal = document.getElementById('trackingModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>

@endsection

