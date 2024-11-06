<style>
    .form-control {
        border: 1px solid #fff;
        width: 100%;
        padding: 10px 20px;
        margin: 7px 0;
        background-color: #f5f5f5;
        transition: background-color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control::placeholder {
        color: #1E1E1E;
    }

    .form-control:focus {
        background-color: #ffffff;
        border-color: #6EC1E4;
        border-width: 3px;
        outline: none;
    }

    .contactform textarea {
        height: 150px;
        border-radius: 10px;
        padding: 20px;
    }
     .formbtn {
        color:#fff;
        background-color:#ff6900;
        padding:10px 18px 10px 18px;
        font-weight:600;
        cursor:pointer;
        width:100%;
        border-radius: 10px;
        border:2px solid #ff6900;
     }
     .formbtn:hover{
        background-color:#fff;
        color:#ff6900;
     }
</style>
</head>
<body>
<div class="">

    <form class="contactform">
        <input type="text" class="form-control" placeholder="Name">
        <input type="text" class="form-control" placeholder="Email">
        <input type="text" class="form-control" placeholder="Website">
        <textarea class="form-control" placeholder="Message"></textarea>
        <button type="submit" class="formbtn">Submit</button>
    </form>
</div>