<nav class="navbar navbar-expand-sm">
    <a class="navbar-brand" href="#">
        <img src=<?php echo plugins_url('logo-x.png', __FILE__); ?> alt="Ibinex Logo" />
        <span>Ibinex Forms</span>
        <small>1.0.0</small>
    </a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#new-form-modal">New Form</button>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <button type="button" class="btn btn-secondary btn-sm">Import</button>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <button type="button" class="btn btn-secondary btn-sm">Email Settings</button>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <button type="button" class="btn btn-secondary btn-sm">General Settings</button>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <button type="button" class="btn btn-secondary btn-sm">Order Forms By Name</button>
            </a>
        </li>
    </ul>
</nav>

<!-- New Form Modal -->
<div class="modal fade" id="new-form-modal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Create New Form</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body row">
                <div class="col-3">
                    <a class="form-template unselected" href="#">
                        <div class="unselected-name">
                            <small>Blank Form</small>
                        </div>
                        <div class="unselected-body"></div>
                    </a>
                    <div class="form-template selected d-none">
                        <div class="selected-name"></div>
                        <div class="selected-body"></div>
                    </div>
                </div>

                <div class="col-3">
                    <a class="form-template unselected" href="#">
                        <div class="unselected-name">
                            <small>Contact Form</small>
                        </div>
                        <div class="unselected-body"></div>
                    </a>
                    <div class="form-template selected d-none">
                        <div class="selected-name"></div>
                        <div class="selected-body"></div>
                    </div>
                </div>

                <div class="col-3">
                    <a class="form-template unselected" href="#">
                        <div class="unselected-name">
                            <small>Registration Form</small>
                        </div>
                        <div class="unselected-body"></div>
                    </a>
                    <div class="form-template selected d-none">
                        <div class="selected-name"></div>
                        <div class="selected-body"></div>
                    </div>
                </div>

                <!--
                <div class="col-3">
                    <a class="form-template unselected" href="#">
                        <div>
                            <small class="form-template-name">Blank Form 2</small>
                        </div>
                        <div class="form-template-body"></div>
                    </a>
                </div>

                <div class="col-3">
                    <a class="form-template unselected" href="#">
                        <div>
                            <small class="form-template-name">Blank Form 3</small>
                        </div>
                        <div class="form-template-body"></div>
                    </a>
                </div>

                <div class="col-3">
                    <a class="form-template unselected" href="#">
                        <div>
                            <small class="form-template-name">Blank Form 4</small>
                        </div>
                        <div class="form-template-body"></div>
                    </a>
                </div>

                <div class="col-3">
                    <a class="form-template unselected" href="#">
                        <div>
                            <small class="form-template-name">Blank Form 5</small>
                        </div>
                        <div class="form-template-body"></div>
                    </a>
                </div>

                <div class="col-3">
                    <a class="form-template unselected" href="#">
                        <div>
                            <small class="form-template-name">Blank Form 6</small>
                        </div>
                        <div class="form-template-body"></div>
                    </a>
                </div>
            </div>
            -->
            <!--
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            -->

        </div>
    </div>
</div>
