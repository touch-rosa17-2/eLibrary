<?php

include './configStyle.php';
?>
<div class="container-sideMenu" id="containerSideMenu">
    <div class="dashboardList">
        <input type="checkbox" name="" id="check">
        <label for="check" class="checkBtn">
            <i class="fa fa-bars"></i>
        </label>
        <ul>
            <li>
                <div class="logo bd-buttom">
                    <img src="./assets/sideBar/img/elearning (1).png" alt="">
                    <!-- <box-icon type='solid' name='book-reader'></box-icon> -->
                    <span>Dolphin Libra</span>
                </div>
            </li>
            <li>
                <div class="profile bd-buttom">
                    <img src="./assets/sideBar/img/profile.png" alt="">
                    <div class="profile-title">
                        <h4>Admin</h4>
                        <span class="profile-type">Super Admin</span>
                    </div>
                </div>

            </li>
            <li>
                <a href="./dashboard.php">
                    <box-icon name='dashboard' type='solid' color='#ffffff' ></box-icon>
                    <span>Dashboard</span>
                </a>
            </li>
            <li  id="test"><!--- onclick="abc()" --->
                <a href="./receipt.php">
                    <!-- <img src="./assets/sideBar/img/problem-report.png" alt=""> -->
                    <box-icon name='receipt' type='solid' color='#ffffff' ></box-icon>
                    <span>Receipts</span>
                </a>
            </li>
            <li class="parentSub">
                <!-- <div class="parent" id="btnClassification" onclick="showSubClassification()"> -->
                <div class="parent" id="btnClassification" >
                    <div class="parentLeft">
                        <box-icon name='command' color='#ffffff' ></box-icon>
                        <span>Classification</span>
                    </div>
                    <box-icon class="downArrow" id="down-arrow" name='chevron-down' type='solid' color='#ffffff' ></box-icon>
                </div>
                <div class="subChild" id="childClassification">
                    <ul>
                        <li>
                            <a href="">
                                <box-icon name='code-alt' color='#ffffff' ></box-icon>
                                <span>Author</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <box-icon name='code-alt' color='#ffffff' ></box-icon>
                                <span>Publisher</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <box-icon name='code-alt' color='#ffffff' ></box-icon>
                                <span>Tag</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <box-icon name='code-alt' color='#ffffff' ></box-icon>
                                <span>Comming soon</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="parentSub">
                <!-- <div class="parent" id="btnLibrary" onclick="showSubLibrary()"> -->
                <div class="parent" id="btnLibrary">
                    <div class="parentLeft">
                        <box-icon name='library' color='#ffffff' ></box-icon>
                        <span>Library</span>
                    </div>
                    <box-icon class="downArrow"  name='chevron-down' type='solid' color='#ffffff' ></box-icon>
                </div>
                <div class="subChild" id="childLibrary">
                    <ul>
                        <li>
                            <a href="">
                                <box-icon name='code-alt' color='#ffffff' ></box-icon>
                                <span>Add Book</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <box-icon name='code-alt' color='#ffffff' ></box-icon>
                                <span>Mng Book</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <box-icon name='code-alt' color='#ffffff' ></box-icon>
                                <span>Inssue Books</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <box-icon name='code-alt' color='#ffffff' ></box-icon>
                                <span>Inssued Book</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">
                    <box-icon name='globe' color='#ffffff' ></box-icon>
                    <span>Subscriber</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <box-icon name='notepad' type='solid' color='#ffffff' ></box-icon>
                    <span>Notice</span>
                </a>
            </li>
            <li>
                <a href="./mngUser.php">
                    <box-icon name='user-detail' type='solid' color='#ffffff' ></box-icon>
                    <span>User</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <box-icon name='select-multiple' type='solid' color='#ffffff' ></box-icon>
                    <span>Permission</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <box-icon name='cog' color='#ffffff' ></box-icon>
                    <span>Setting</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- <section class="home-section">
    <div class="home-content">
        <box-icon name='menu' class="bx-menu" ></box-icon>
    </div>
</section> -->
<!--  -->
<script src="./assets/sideBar/js/script.js"></script>
