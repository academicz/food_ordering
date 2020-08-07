<div id="demo-set" class="demo-set">
    <div id="demo-set-body" class="demo-set-body collapse">
        <div id="demo-set-alert"></div>
        <div class="pad-hor bord-btm clearfix">
            <div class="pull-right pad-top">
                <button id="demo-btn-close-settings" class="btn btn-trans">
                    <i class="pci-cross pci-circle icon-lg"></i>
                </button>
            </div>
            <div class="media">
                <div class="media-left">
                    <i class="demo-pli-gear icon-2x"></i>
                </div>
                <div class="media-body">
                    <span class="text-semibold text-lg text-main">Costomize</span>
                    <p class="text-muted text-sm">Customize Nifty's layout, sidebars, and color schemes.</p>
                </div>
            </div>
        </div>
        <div class="demo-set-content clearfix">
            <div class="col-xs-6 col-md-3">
                <div class="pad-all bg-gray-light">
                    <p class="text-semibold text-main text-lg">Layout</p>
                    <p class="text-semibold text-main">Boxed Layout</p>
                    <div class="pad-btm">
                        <div class="pull-right">
                            <input id="demo-box-lay" class="toggle-switch" type="checkbox">
                            <label for="demo-box-lay"></label>
                        </div>
                        Boxed Layout
                    </div>
                    <div class="pad-btm">
                        <div class="pull-right">
                            <button id="demo-box-img" class="btn btn-sm btn-trans" disabled><i class="pci-hor-dots"></i></button>
                        </div>
                        Background Images <span class="label label-primary">New</span>
                    </div>

                    <hr class="new-section-xs bord-no">
                    <p class="text-semibold text-main">Animations</p>
                    <div class="pad-btm">
                        <div class="pull-right">
                            <input id="demo-anim" class="toggle-switch" type="checkbox" checked>
                            <label for="demo-anim"></label>
                        </div>
                        Enable Animations
                    </div>
                    <div class="pad-btm">
                        <div class="select pull-right">
                            <select id="demo-ease">
                                <option value="effect" selected>ease (Default)</option>
                                <option value="easeInQuart">easeInQuart</option>
                                <option value="easeOutQuart">easeOutQuart</option>
                                <option value="easeInBack">easeInBack</option>
                                <option value="easeOutBack">easeOutBack</option>
                                <option value="easeInOutBack">easeInOutBack</option>
                                <option value="steps">Steps</option>
                                <option value="jumping">Jumping</option>
                                <option value="rubber">Rubber</option>
                            </select>
                        </div>
                        Transitions
                    </div>

                    <hr class="new-section-xs bord-no">

                    <p class="text-semibold text-main text-lg">Header / Navbar</p>
                    <div>
                        <div class="pull-right">
                            <input id="demo-navbar-fixed" class="toggle-switch" type="checkbox">
                            <label for="demo-navbar-fixed"></label>
                        </div>
                        Fixed Position
                    </div>

                    <hr class="new-section-xs bord-no">

                    <p class="text-semibold text-main text-lg">Footer</p>
                    <div class="pad-btm">
                        <div class="pull-right">
                            <input id="demo-footer-fixed" class="toggle-switch" type="checkbox">
                            <label for="demo-footer-fixed"></label>
                        </div>
                        Fixed Position
                    </div>
                </div>
            </div>
            <div class="col-lg-9 pos-rel">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="pad-all">
                            <p class="text-semibold text-main text-lg">Sidebars</p>
                            <p class="text-semibold text-main">Navigation</p>
                            <div class="mar-btm">
                                <div class="pull-right">
                                    <input id="demo-nav-fixed" class="toggle-switch" type="checkbox">
                                    <label for="demo-nav-fixed"></label>
                                </div>
                                Fixed Position
                            </div>
                            <div class="mar-btm">
                                <div class="pull-right">
                                    <input id="demo-nav-profile" class="toggle-switch" type="checkbox" checked>
                                    <label for="demo-nav-profile"></label>
                                </div>
                                Widget Profil <small class="label label-primary">New</small>
                            </div>
                            <div class="mar-btm">
                                <div class="pull-right">
                                    <input id="demo-nav-shortcut" class="toggle-switch" type="checkbox" checked>
                                    <label for="demo-nav-shortcut"></label>
                                </div>
                                Shortcut Buttons
                            </div>
                            <div class="mar-btm">
                                <div class="pull-right">
                                    <input id="demo-nav-coll" class="toggle-switch" type="checkbox">
                                    <label for="demo-nav-coll"></label>
                                </div>
                                Collapsed Mode
                            </div>

                            <div class="clearfix">
                                <div class="select pad-btm pull-right">
                                    <select id="demo-nav-offcanvas">
                                        <option value="none" selected disabled="disabled">-- Select Mode --</option>
                                        <option value="push">Push</option>
                                        <option value="slide">Slide in on top</option>
                                        <option value="reveal">Reveal</option>
                                    </select>
                                </div>
                                Off-Canvas
                            </div>

                            <p class="text-semibold text-main">Aside</p>
                            <div class="mar-btm">
                                <div class="pull-right">
                                    <input id="demo-asd-vis" class="toggle-switch" type="checkbox">
                                    <label for="demo-asd-vis"></label>
                                </div>
                                Visible
                            </div>
                            <div class="mar-btm">
                                <div class="pull-right">
                                    <input id="demo-asd-fixed" class="toggle-switch" type="checkbox" checked>
                                    <label for="demo-asd-fixed"></label>
                                </div>
                                Fixed Position
                            </div>
                            <div class="mar-btm">
                                <div class="pull-right">
                                    <input id="demo-asd-float" class="toggle-switch" type="checkbox" checked>
                                    <label for="demo-asd-float"></label>
                                </div>
                                Floating <span class="label label-primary">New</span>
                            </div>
                            <div class="mar-btm">
                                <div class="pull-right">
                                    <input id="demo-asd-align" class="toggle-switch" type="checkbox">
                                    <label for="demo-asd-align"></label>
                                </div>
                                Left Side
                            </div>
                            <div>
                                <div class="pull-right">
                                    <input id="demo-asd-themes" class="toggle-switch" type="checkbox">
                                    <label for="demo-asd-themes"></label>
                                </div>
                                Dark Version
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div id="demo-theme">
                            <div class="row bg-gray-light pad-top">
                                <p class="text-semibold text-main text-lg pad-lft">Color Schemes</p>
                                <div class="demo-theme-btn col-md-4 pad-ver">
                                    <p class="text-semibold text-main">Header</p>
                                    <div class="demo-justify-theme">
                                        <a href="#" class="demo-theme demo-a-light add-tooltip" data-theme="theme-light" data-type="a" data-title="(A). Light">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-a-navy add-tooltip" data-theme="theme-navy" data-type="a" data-title="(A). Navy Blue">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-a-ocean add-tooltip" data-theme="theme-ocean" data-type="a" data-title="(A). Ocean">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                    </div>
                                    <div class="demo-justify-theme">
                                        <a href="#" class="demo-theme demo-a-lime add-tooltip" data-theme="theme-lime" data-type="a" data-title="(A). Lime">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-a-purple add-tooltip" data-theme="theme-purple" data-type="a" data-title="(A). Purple">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-a-dust add-tooltip" data-theme="theme-dust" data-type="a" data-title="(A). Dust">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                    </div>
                                    <div class="demo-justify-theme">
                                        <a href="#" class="demo-theme demo-a-mint add-tooltip" data-theme="theme-mint" data-type="a" data-title="(A). Mint">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-a-yellow add-tooltip" data-theme="theme-yellow" data-type="a" data-title="(A). Yellow">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-a-well-red add-tooltip" data-theme="theme-well-red" data-type="a" data-title="(A). Well Red">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                    </div>
                                    <div class="demo-justify-theme">
                                        <a href="#" class="demo-theme demo-a-coffee add-tooltip" data-theme="theme-coffee" data-type="a" data-title="(A). Coffee">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-a-prickly-pear add-tooltip" data-theme="theme-prickly-pear" data-type="a" data-title="(A). Prickly pear">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-a-dark add-tooltip" data-theme="theme-dark" data-type="a" data-title="(A). Dark">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="demo-theme-btn col-md-4 pad-ver">
                                    <p class="text-semibold text-main">Brand</p>
                                    <div class="demo-justify-theme">
                                        <a href="#" class="demo-theme demo-b-light add-tooltip" data-theme="theme-light" data-type="b" data-title="(B). Light">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-b-navy add-tooltip" data-theme="theme-navy" data-type="b" data-title="(B). Navy Blue">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-b-ocean add-tooltip" data-theme="theme-ocean" data-type="b" data-title="(B). Ocean">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                    </div>
                                    <div class="demo-justify-theme">
                                        <a href="#" class="demo-theme demo-b-lime add-tooltip" data-theme="theme-lime" data-type="b" data-title="(B). Lime">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-b-purple add-tooltip" data-theme="theme-purple" data-type="b" data-title="(B). Purple">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-b-dust add-tooltip" data-theme="theme-dust" data-type="b" data-title="(B). Dust">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                    </div>
                                    <div class="demo-justify-theme">
                                        <a href="#" class="demo-theme demo-b-mint add-tooltip" data-theme="theme-mint" data-type="b" data-title="(B). Mint">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-b-yellow add-tooltip" data-theme="theme-yellow" data-type="b" data-title="(B). Yellow">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-b-well-red add-tooltip" data-theme="theme-well-red" data-type="b" data-title="(B). Well red">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                    </div>
                                    <div class="demo-justify-theme">
                                        <a href="#" class="demo-theme demo-b-coffee add-tooltip" data-theme="theme-coffee" data-type="b" data-title="(B). Coofee">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-b-prickly-pear add-tooltip" data-theme="theme-prickly-pear" data-type="b" data-title="(B). Prickly pear">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-b-dark add-tooltip" data-theme="theme-dark" data-type="b" data-title="(B). Dark">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="demo-theme-btn col-md-4 pad-ver">
                                    <p class="text-semibold text-main">Navigation</p>
                                    <div class="demo-justify-theme">
                                        <a href="#" class="demo-theme demo-c-light add-tooltip" data-theme="theme-light" data-type="c" data-title="(C). Light">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-c-navy add-tooltip" data-theme="theme-navy" data-type="c" data-title="(C). Navy Blue">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-c-ocean add-tooltip" data-theme="theme-ocean" data-type="c" data-title="(C). Ocean">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                    </div>
                                    <div class="demo-justify-theme">
                                        <a href="#" class="demo-theme demo-c-lime add-tooltip" data-theme="theme-lime" data-type="c" data-title="(C). Lime">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-c-purple add-tooltip" data-theme="theme-purple" data-type="c" data-title="(C). Purple">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-c-dust add-tooltip" data-theme="theme-dust" data-type="c" data-title="(C). Dust">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                    </div>
                                    <div class="demo-justify-theme">
                                        <a href="#" class="demo-theme demo-c-mint add-tooltip" data-theme="theme-mint" data-type="c" data-title="(C). Mint">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-c-yellow add-tooltip" data-theme="theme-yellow" data-type="c" data-title="(C). Yellow">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-c-well-red add-tooltip" data-theme="theme-well-red" data-type="c" data-title="(C). Well Red">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                    </div>
                                    <div class="demo-justify-theme">
                                        <a href="#" class="demo-theme demo-c-coffee add-tooltip" data-theme="theme-coffee" data-type="c" data-title="(C). Coffee">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-c-prickly-pear add-tooltip" data-theme="theme-prickly-pear" data-type="c" data-title="(C). Prickly pear">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                        <a href="#" class="demo-theme demo-c-dark add-tooltip" data-theme="theme-dark" data-type="c" data-title="(C). Dark">
                                            <div class="demo-theme-brand"></div>
                                            <div class="demo-theme-head"></div>
                                            <div class="demo-theme-nav"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="demo-bg-boxed" class="demo-bg-boxed">
                    <div class="demo-bg-boxed-content">
                        <p class="text-semibold text-main text-lg mar-no">Background Images</p>
                        <p class="text-sm text-muted">Add an image to replace the solid background color</p>
                        <div class="row">
                            <div class="col-lg-4 text-justify">
                                <p class="text-semibold text-main">Blurred</p>
                                <div id="demo-blurred-bg" class="text-justify">
                                    <!--Blurred Backgrounds-->
                                </div>
                            </div>
                            <div class="col-lg-4 text-justify">
                                <p class="text-semibold text-main">Polygon &amp; Geometric</p>
                                <div id="demo-polygon-bg" class="text-justify">
                                    <!--Polygon Backgrounds-->
                                </div>
                            </div>
                            <div class="col-lg-4 text-justify">
                                <p class="text-semibold text-main">Abstract</p>
                                <div id="demo-abstract-bg" class="text-justify">
                                    <!--Abstract Backgrounds-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="demo-bg-boxed-footer">
                        <button id="demo-close-boxed-img" class="btn btn-primary">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button id="demo-set-btn" class="btn" data-toggle="collapse" data-target="#demo-set-body"><i class="demo-psi-gear icon-lg"></i></button>
</div>