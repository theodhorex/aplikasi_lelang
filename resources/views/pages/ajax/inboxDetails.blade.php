<input type="hidden" id="postingan_title" name="" value="{{ $messages -> postingan -> title }}">
<style>
.main-color {
    color: #C6DE41;
}

.border-dashed {
    border-style: dashed;
}

.remove-focus:focus {
    outline: none;
    box-shadow: none;
    color: white;
}

.placeholder::placeholder {
    color: white;
}

.action-button {
    background-color: #C6DE41;
    color: #071C21;
    font-weight: 600;
    cursor: pointer;
}

.action-button:hover {
    background-color: #C6DE41;
    color: #071C21;
    font-weight: 600;
    cursor: pointer;
}

.cursor {
    cursor: pointer;
}
</style>
<div class="row mx-5 my-2">
    <div class="col">
        <div class="row mb-4">
            <div class="col">
                <div class="row">
                    <div class="col-6">
                        <h1 class="text-light fw-bold">{{ $messages -> postingan -> title }}</h1>
                    </div>
                    <div class="col-6 my-auto">
                        <div class="d-inline-flex float-end">
                            <h4 class="py-0 my-0 text-light"><i
                                class="fa fa-trash me-2 text-light me-3"></i></h4>
                        </div>
                    </div>
                </div>
                <div class="col d-inline-flex">
                    <h5 class="me-3" style="color: #C6DE41">System</h5>
                    <div style="background-color: #9CA4A6; width: .1vw; height: 2.3vh;" class="rounded me-3"></div>
                    <span style="color: #9CA4A6;">{{ $messages -> created_at -> diffForHumans() }}</span>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <p class="text-light fs-5" style="text-align: justify;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, eligendi error! Impedit iusto
                    quam, amet consequatur illum numquam consectetur saepe nihil natus? Quam, possimus iure. Maiores
                    itaque vel ex cumque? Ex quos iusto animi iure repellendus modi libero delectus! Maiores id quas
                    velit repellendus molestiae dolores illo possimus neque minima laborum aut blanditiis, temporibus
                    amet, architecto maxime magnam eius iure iusto quod excepturi in! Ab, incidunt libero, quaerat
                    maxime voluptates rem cum natus laboriosam hic ratione nostrum asperiores quasi modi magni quae
                    harum illum unde autem corporis id debitis reprehenderit adipisci sed! Ipsum, totam aliquam aperiam,
                    aliquid magnam temporibus, ipsam ullam soluta tempore minima minus. Laborum dicta a quod consectetur
                    perspiciatis quasi deserunt, excepturi eaque ut ab fugit inventore quaerat non dignissimos iusto
                    maiores hic similique eligendi dolore ipsa, voluptatibus velit, nisi neque! Vel beatae sunt non
                    tempore? Fugiat quibusdam maiores laudantium non repellendus possimus suscipit soluta molestiae
                    aspernatur totam?
                </p>
            </div>
        </div>
        <div class="row mt-5 mb-4">
            <div class="col">
                <span
                    style="color: #9CA4A6;">{{ \Carbon\Carbon::parse($messages -> created_at)->format('d/m/Y') }}</span>
                <br>
                <span style="color: #9CA4A6;">Celtic Auction ID</span>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="row mb-4">
                    <h5 class="py-0 my-0 text-light text-decoration-underline"><i
                            class="fa fa-reply me-2 text-light me-3"></i> Reply</h5>
                </div>
                <h4 class="text-light mb-2">Please complete the form below, so we can send the items you have won</h4>
                <span class="mb-4" style="color: #9CA4A6;">*remember! You can only submit this form once, so make sure
                    the data is correct</span>
                <div class="row mb-3 mt-5">
                    <div class="col">
                        <input type="text"
                            class="form-control text-light bg-transparent remove-focus placeholder cursor"
                            placeholder="Receipent's name" required>
                    </div>
                    <div class="col">
                        <input type="text"
                            class="form-control text-light bg-transparent remove-focus placeholder cursor"
                            placeholder="Phone number" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text"
                            class="form-control text-light bg-transparent remove-focus placeholder cursor"
                            placeholder="Address" required>
                    </div>
                    <div class="col">
                        <input type="text"
                            class="form-control text-light bg-transparent remove-focus placeholder cursor"
                            placeholder="Postal code" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <textarea name="" id="" cols="30" rows="10"
                            class="form-control text-light bg-transparent remove-focus placeholder cursor"
                            placeholder="Description *Optional (Like size, color, and so on)"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="#" class="btn fw-semibold" style="background-color: #C6DE41;">Send</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>