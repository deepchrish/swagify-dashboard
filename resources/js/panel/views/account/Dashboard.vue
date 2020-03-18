<template>
  <div id="bn-page-home">
    <div class="flex flex-wrap">
      <div class="vx-col w-full">
        <div class="bn-welcome-msg my-5">
          <h1 class="mb-2">Welcome, {{ activeUserInfo.displayName }}</h1>
          <p>How’s it going?</p>
        </div>
        <div class="py-5 text-center sw-headings">
          <h2>You’ve done pretty good so far</h2>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap mb-4">
      <div class="w-full hidden lg:block lg:w-1/4 xl:w-1/4">
        <div class="sw-left-img">
          <img class="img-responsive" src="@assets/images/pages/left-side.png" />
        </div>
      </div>
      <div class="w-full md:w-full lg:w-1/2 xl:w-1/2">
        <div class="con-slot-tabs">
          <div class="con-tab vs-tabs--content sw-dash-bg">
            <div class="sw-grey-text">
              <h3 class="text-grey">Make yourself feel at home</h3>
            </div>
            <vs-tabs alignment="left" position="left">
              <vs-tab label="Create Storehub">
                <div>
                  <div>
                    <h3>Title appears here. This should always cover two lines of a sentence.</h3>
                    <p class="mt-3 text-grey">
                      This is where we explain the user what is it, that we want to
                      them to do. We need to be very concise and simple with our words and it
                      should always cover 3-lines for the content.
                    </p>
                    <div class="py-4 mt-3">
                      <vs-button color="primary" type="filled">Create Storehub</vs-button>
                      <a href="storehubs">View my storehubs</a>
                    </div>
                  </div>
                </div>
              </vs-tab>
              <vs-tab label="Connect Stores">
                <div>
                  <h3>Title appears here. This should always cover two lines of a sentence.</h3>
                  <p class="mt-3 text-grey">
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book.
                  </p>
                </div>
              </vs-tab>
              <vs-tab ltext-uppercaseabel="Link item here">
                <div>
                  <h3>Title appears here. This should always cover two lines of a sentence.</h3>
                  <p class="mt-3 text-grey">
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at its layout. The
                    point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                    letters, as opposed to using 'Content here, content here', making it look like
                    readable English.
                  </p>
                </div>
              </vs-tab>
            </vs-tabs>
          </div>
        </div>
      </div>
      <div class="w-full hidden lg:block lg:w-1/4 xl:w-1/4">
        <div class="sw-right-img">
          <img class="img-responsive" src="@assets/images/pages/right-side.png" />
        </div>
      </div>
    </div>
    <div class="pt-10 text-center sw-headings">
      <h2>Tips and Tricks</h2>
    </div>
    <div class="flex flex-wrap my-4">
      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/3 px-2 mb-3">
        <div class="sw-cards">
          <div class="sw-card-img">
            <img
              class="img-responsive"
              src="https://www.oberlo.com/wp-content/uploads/2017/08/podvsali.jpg"
            />
          </div>
          <div class="p-4">
            <p>Title of the blog here. This should always cover two lines of a sentence.</p>
            <a class="text-uppercase" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/3 px-2 mb-3">
        <div class="sw-cards">
          <div class="sw-card-img">
            <img
              class="img-responsive"
              src="https://www.oberlo.com/wp-content/uploads/2017/08/podvsali.jpg"
            />
          </div>
          <div class="p-4">
            <p>Title of the blog here. This should always cover two lines of a sentence.</p>
            <a class="text-uppercase" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/3 px-2 mb-3">
        <div class="sw-cards">
          <div class="sw-card-img">
            <img
              class="img-responsive"
              src="https://www.oberlo.com/wp-content/uploads/2017/08/podvsali.jpg"
            />
          </div>
          <div class="p-4">
            <p>Title of the blog here. This should always cover two lines of a sentence.</p>
            <a class="text-uppercase" href="#">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  computed: {
    activeUserInfo() {
      return this.$store.state.AppActiveUser;
    }
  }
};
</script>
