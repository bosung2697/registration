<style>
    .smaller_font{
       font-weight:500;
        font-size:0.89vw;
    }
    .video_url_page{
        margin:0;
        padding:0;
    }
    .alphabet_listing{
        font-size: 1.85vw!important;
        font-weight: 500!important;
        color: #ccc!important;
    }
    .video_name{
        color:#3399cc;
        font-size:0.7vw;
        border-bottom: 1px solid #3399cc;
        cursor:pointer;
    }
    .video_desc{
        margin:0 0.5vw;
    }
    .background_document{
        background-image: url(/img/document_img.png);
        background-repeat: no-repeat;
        -webkit-background-size: 100%;
        background-size: 30%;
        background-position: 92% 22%;
    }
    .header_p{
        margin:0;
        padding:1vh 0 2.5vh 0;
    }
    .lists > div {
        width: 98%;
        text-align: left;
        padding: 1vh 2.5vw 5vh 2.5vw;
        word-break: keep-all;
    }

    .border_bottom{
        font-style: normal!important;
        font-weight:500!important;
        border-bottom: 1px solid #999;
        margin:0;
        padding:0;
    }
    .coloring_yellow{
        font-style:normal!important;
        font-weight:500!important;
        color:#ff9900;
        margin:0;
        padding:0;
    }
    .coloring_red{
        font-style:normal!important;
        font-weight:500!important;
        color:#ff6666;
        margin:0;
        padding:0;
    }

    .specialchars {
        font-size: 2.3vw;
        font-weight: 600;
        padding: 0 0 0 0;
        color: #999;
        margin: 0;
    }

    .list_header {
        padding: 0 0 0 0.51vw;
        font-size: 1.94vw;
        font-weight:600;
        color: #3399cc;
    }

    .lists .contents {
        padding: 0 0 0 2vw;
        font-size: 1.132vw;
        font-weight: 500;
        color: #999;
        line-height:1.8vw;
    }

    .introduction {
        width: 100%;
    }

    .introduction > img {
        width: 100%;
    }

    .page {
        display: grid;
        display: -ms-grid;
        -ms-grid-columns: 27.3fr 0 72.7fr;
        column-gap: 0;
        grid-template-columns: 27.3% 72.7%;

    }

    .QnA {
        width: 100%;
    }

    .questions {
        word-break: keep-all;
        color: #a7a7a7;
        padding: 3.5vh 0 1vh 7.76vw;
        text-align: left;
        font-size: 1.1vw;
        font-weight: 500;
        cursor: pointer;
    }

    .answers {
        height: 37.5vh;
        background-color: #FFFFFF;
        border: 1px solid #d3d3d3;
        -webkit-box-shadow: 0.1vw 0.3vw 0.5vw #888888;
        -moz-box-shadow: 0.1vw 0.3vw 0.5vw #888888;
        box-shadow: 0.1vw 0.3vw 0.5vw #888888;
        display: grid;
        display: -ms-grid;
        grid-template-columns: 38% 62%;
        column-gap: 0;
        -ms-grid-columns: 3.8fr 0 6.2fr;
        margin: 2vh 0 3vh 0;
    }

    .answers > div > p {
        color: #6d6d6d;
        margin: 0;
        width: 100%;
        height: 37vh;
        overflow-y: scroll;
        padding: 5vh 1vw;
        font-size: 1.1vw;
        font-weight: 600;
    }

    .active_questions {
        font-size: 1.54vw !important;
        font-weight: 600 !important;
        color: #727272 !important;
        text-decoration: underline;
    }

    .answers_video {
        width: 100%;
        height: 37vh;
        padding: 1.15vh 0.6vw;
    }

    .answers_video > iframe {
        width: 100%;
        height: 100%;
        border: 1px solid #d3d3d3;
    }

    /* width */
    ::-webkit-scrollbar {
        width: 0.7vw;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .pagination > li > a, .pagination > li > span {
        margin: 0 0.8vw;
    }

    .text-center {
        text-align: center;
        font-size: 1vw;
    }

    .pagination1 {
        padding: 16% 0 5% 0;
    }

    .pagination {
        display: inline-block;
        list-style: none;
    }

    .active_nav {
        color: #74b2e7;
    }

    .testingimg {
        width: 100%;
        height: 100%;
    }

    @font-face {
        font-family: 'NanumBarunGothic';
        src: url('/fonts/NanumBarunGothic.eot');
        src: url('/fonts/NanumBarunGothic.eot') format('embedded-opentype'),
        url('/fonts/NanumBarunGothic.woff') format('woff');
    }

    body, html, div, a, b, i, p {
        font-family: 'NanumBarunGothic', 'serif';
    }

    body, html {
        background-color: white;
    }

    .home_search {
        margin: 0;
        width: 76%;
        height: 100%;
        padding: 0;
        border: none;
    }
    .navigation_bar {
        padding: 0 5vw 0 0;
        border-bottom: 2px solid #e8e8e8;
        width: 100%;
        height: 18.5vh;
        margin: 0 0 2vh 0;
        display: grid;
        display: -ms-grid;
        -ms-grid-columns: 3.57fr 0 6.43fr;
        column-gap: 0;
        grid-template-columns: 35.7% 64.3%
    }

    .navigation_bar_contents {
        width: 100%;

    }

    .navigation_bar_container {
        color: #717171;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1vh 1.8vw 1vh 0;
        font-size: 1.35vw;
        font-weight: 500;
        cursor: pointer;
        margin-top:2vh;
    }

    .navigation_bar_container > div:hover {
        color: #43a5cf;
    }

    .image_text_container {
        position: relative;
    }

    /* Bottom right text */
    .text-block {
        background-color: black;
        bottom: 0;
        color: white;
        width: 100%;
        opacity: 0.6;
        text-align: center;
        padding: 0;
        margin: 0;
    }

    .text-block p {
        margin: 0;
        text-align: center;
        -ms-text-overflow: ellipsis;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        bottom: 0;

    }

    html {
        background-color: white;
    }

    .body {
        width: 100%;
        height: 100%;
        min-height: 50%;
    }

    .image_text_container {
        position: relative;
        width: 14vw;
        height: 19vh;
    }

    /* Bottom right text */
    .text-block {
        background-color: black;
        bottom: 0;
        color: white;
        width: 100%;
        opacity: 0.6;
        text-align: center;
        padding: 0;
        margin: 0;
    }

    .text-block p {
        margin: 0;
        text-align: center;
        -ms-text-overflow: ellipsis;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        width: 100%;
        height: 20%;

    }

    .pagination > .disabled > a, .pagination > .disabled > a:focus,
    .pagination > .disabled > a:hover, .pagination > .disabled > span,
    .pagination > .disabled > span:focus, .pagination > .disabled > span:hover {
        color: #777;
        background-color: transparent;
        border: none;
        cursor: not-allowed;
    }

    .pagecontents_td {
        text-align: center;
        border: solid 1px #3b5493;
        margin: 1vw;
    }

    .tothedetailpage {
        cursor: pointer;
        width: 100%;
    }

    .judicialpage_list {
        width: 100%;
    }

    .judicialpage_list div {
        cursor: pointer;
        display: inline-block;
        display: -moz-inline-block;
        display: inline;
        padding: 0.7vw;
        font-weight: 700;
        justify-content: left;
        text-align: left;
        font-size: 1vw;
    }

    .judicialpage_list div:hover {
        font-size: 1.1vw;
        color: #e85254;
        font-weight: 800;
    }

    .detailpage_list div {
        cursor: pointer;
        display: inline-block;
        display: -moz-inline-block;
        display: inline;
        padding: 0.7vw;
        font-weight: 700;
        justify-content: left;
        text-align: left;
        font-size: 1vw;
    }

    .detailpage_list div:hover {
        font-size: 1.1vw;
        color: #e85254;
        font-weight: 800;
    }

    .table_id {
        width: 5%;
    }

    .table_dash_id {
        width: 15%;
    }

    .table_date {
        width: 15%;
    }

    .pagecontents {
        width: 100%;
        border-bottom: 1px solid;
        border-top: 1px solid black;
        font-size: 1.5vw;
    }

    .pagecontents th {
        padding: 0.9vw 0;
        font-size: 0.9vw;
        font-weight: 600;
        border-top: 1px solid lightgrey;
        border-bottom: 1px solid lightgrey;
        color: black;

    }

    .pagecontents td, .pagecontents a, .pagecontents a:hover {
        padding: 0.9vw 0;
        font-size: 0.8vw;
        font-weight: 600;
        color: black;
        text-decoration: none;
    }

    .th1 {
        background-color: #fae1da;

    }

    .th2 {
        background-color: #fcefec;

    }

    .td1 {
        background-color: #f6f7fb;
    }

    .td2 {
        background-color: #ededed;
    }

    .pagination > li > a, .pagination > li > span {
        position: relative;
        float: left;
        padding: 6px 12px;
        line-height: 1.6;
        color: black;
        background-color: transparent;
        border: none;
        cursor: pointer;
    }

    tbody {
        text-align: center;
    }

    hr {
        margin-top: 16px;
    !important margin-bottom: 22 px;
    !important border: 0;
        border-top: 1px solid;
    !Important
    }

    a:hover {
        cursor: pointer;
    }

    body {
        font-family: 'NanumSquare', sans-serif;
    !important
    }

    .normal {
        font-weight: 400
    }

    .bold {
        font-weight: 700
    }

    .bolder {
        font-weight: 800
    }

    .light {
        font-weight: 300
    }

    .menu_btn1 {
        background-color: transparent;
        border: 0.5px solid grey;
        font-size: 1.1vw;
        font-weight: 500;
        -webkit-border-radius: 0.8vw;
        -moz-border-radius: 0.8vw;
        border-radius: 0.8vw;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown1 {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown1-content {
        display: none;
        text-align: center;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 5vw;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        z-index: 1;
        font-size: 1vw;
        max-height: 57vh;
        overflow-y: scroll;
    }

    .dropdown1-content::-webkit-scrollbar-track {
        background-color: transparent;
    }

    .dropdown1-content::-webkit-scrollbar-thumb {
        background-color: lightgrey;
    }

    .dropdown1-content::-webkit-scrollbar-button {
        background-color: transparent
    }

    .dropdown1-content::-webkit-scrollbar-corner {
        background-color: grey;
    }

    .dropdown1-content::-webkit-scrollbar {
        width: 2px !important;
        -ms-overflow-style: auto;
    }

    /* Links inside the dropdown */
    .dropdown1-content a {
        color: black;
        padding: 1vh 0.2vw;
        text-decoration: none;
        text-align: left;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown1-content a:hover {
        background-color: #a9a9a9;
    }

    /* Show the dropdown menu on hover */
    .dropdown1:hover .dropdown1-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown1:hover .dropbtn1 {
        background-color: transparent;

    }

    /*---------------드롭다운 메뉴------------------------------------------------------------------------------*/
    .menu_btn {
        background-color: transparent;
        border: 1px solid grey;
        padding: 4px 6px;
        -webkit-border-radius: 0.8vw;
        -moz-border-radius: 0.8vw;
        border-radius: 0.8vw;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 11vw;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 1vh 1vw;
        text-decoration: none;
        text-align: left;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #a9a9a9;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: transparent;
        border: 1.5px solid;
    }

    /*--------------------------------------------------------------------------------------*/
    .navigationheader {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: black;
        width: 75%;
        margin: 1vw 15vw 1vw 15vw;
        height: 7%;
    }

    .navigationheader img {
        width: 60%;

    }

    .navigationheader li {
        display: -moz-inline-block;
        display: inline-block;
        margin: 0 1.7vw;
        font-size: 0.9vw;
        font-weight: 700;
    }

    .navigationheader li a {
        color: black;
    }

    .mySlides {
        background-color: #7888c2;
    }

    .justify-content {
        display: flex;
        display: -ms-flex;
        justify-content: space-between;
        align-items: center;
    }

    .navigationmenu {
        color: black;
        cursor: pointer;
        background-color: #fdf7f5;
        padding: 1vw 15vw 1vw 15vw;
        border: 1px solid transparent;
        justify-content: center;
        -webkit-justify-content: center;
        display: grid;
        display: -ms-grid;
        -ms-grid-columns: 1fr 1vw 1fr 1vw 1fr 1vw 1fr 1vw 1fr 1vw 1fr;
        column-gap: 1vw;
        grid-template-columns: 16.6% 16.6% 16.6% 16.6% 16.6% 16.6%;
        text-align: center;
        font-weight: 700;
        font-size: 1.1vw;
    }

    .onPage {
        color: #556fb4;
        font-weight: 900;

    }

    .searchform {
        padding-left: 0;
        padding-right: 0;
        border-radius: 0.4vw;
        display: flex;
        -webkit-justify-content: center;
        justify-content: center;
    }

    .navbarotherpage {
        display: inline;
        color: white;
        text-align: center;
        justify-content: center;
        border-radius: 0.4vw;
        opacity: 0.85;
        background: #7888c2;
        font-size: 0.6vw;
        font-weight: 700;
        padding: 0.5vh 0.5vw;
        margin: 1vw;
        width: 120px;
        height: 22px;
    }

    .navbarotherpage:hover {
        background-color: #000000;
        color: white;
        text-decoration: none;

    }

    .mainfooter {
        display: -ms-grid;
        display: grid;
        -ms-grid-columns: 1fr 0.5vw 1fr 0.5vw 1fr 0.5vw 1fr 0.5vw 1fr;
        grid-column-gap: 0.5vw;
        grid-template-columns: 20% 20% 20% 20% 20%;
        margin: 1vw 15vw 1vw 15vw;
        text-align: center;
    }

    .grid-item:nth-child(2) {
        -ms-grid-column: 3;
    }

    .grid-item:nth-child(3) {
        -ms-grid-column: 5;
    }

    .grid-item:nth-child(4) {
        -ms-grid-column: 7;
    }

    .grid-item:nth-child(5) {
        -ms-grid-column: 9;
    }

    .grid-item:nth-child(6) {
        -ms-grid-column: 11;
    }

    .grid-item:nth-child(7) {
        -ms-grid-column: 13;
    }

    .footerextra {
        text-align: left;
        margin-left: 18.8vw;
    }

    .active {
        background-color: #e1e1e1 !important;
        text-decoration: underline;
    }

    .liactive {
        background-color: #f5f5f5 !important;
        text-decoration: underline;
    }

    .hide {
        display: none;
    }

    .pagecontent a {
        color: black;
        cursor: pointer;
    }

    .lens_button1 {
        padding: 0;
        margin: 0;
        border: transparent;
        background-color: transparent;
        border-radius: 0.4vw;
    }

    .lens_button1 img {
        background-color: transparent;
        padding: 3px;
        margin: 0;
        border: none;
        width: 1.7vw;
        height: 3.3vh;
        cursor: pointer;
        border-radius: 0.4vw;
        text-align: center;
        align-items: center;
        justify-content: center;
    }
</style>
