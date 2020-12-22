<div class="">
    <div class="container">
        <div class="mt-5 pt-1 pb-1">
            <?php if (session()->get('isLoggedIn')): ?>
                <div class="middleButton boxBorder">
                    <i  class="material-icons ">add_circle_outline</i>
                    <a href="updateSubmit">Create A Post</a>
                </div>

            <?php endif ?>
            <br>
            <div class="col-md boxBorder">
                <img class="imageCenter" alt="Latest Update" src="https://i.pravatar.cc/150?img=50">
                <br>
                <h2 class="text-center"> Latest Update</h2>
                <hr>
                <p class="text-center">Some text that describes me lorem ipsum ipsum lorem.</p>
                <a href="updateDisplay">Read More</a>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-4">
                <div class="col-md-12 boxBorder">
                    <img class="imageCenter" alt="Older Update" src="https://i.pravatar.cc/150?img=50">
                    <h2 class="text-center">Older Update</h2>
                    <hr>
                    <p class="text-center">Some text that describes me lorem ipsum ipsum lorem.</p>
                    <a href="updateDisplay">Read More</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="col-md-12 boxBorder">
                    <img class="imageCenter" alt="Older Update" src="https://i.pravatar.cc/150?img=50">
                    <h2 class="text-center">Older Update</h2>
                    <hr>
                    <p class="text-center"> Some text that describes me lorem ipsum ipsum lorem.</p>
                    <a href="updateDisplay">Read More</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="col-md-12 boxBorder">
                    <img class="imageCenter" alt="Older Update" src="https://i.pravatar.cc/150?img=50">
                        <h2 class="text-center">Older Update</h2>
                        <hr>
                        <p class="text-center">Some text that describes me lorem ipsum ipsum lorem.</p>
                        <a href="updateDisplay">Read More</a>
                </div>
            </div>
        </div>
        <br>
    </div>
</div>
    