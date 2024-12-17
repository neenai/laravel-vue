<template>
    <main>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <router-link to="/" class="navbar-brand" href="#"
                    >Laravel+Vue Crud</router-link
                >
                <div class="collapse navbar-collapse">
                    <div class="navbar-nav">
                        <router-link
                            exact-active-class="active"
                            to="/"
                            class="nav-item nav-link"
                            >Home</router-link
                        >
                        <router-link
                            exact-active-class="active"
                            to="/category"
                            class="nav-item nav-link"
                            >Category</router-link
                        >
                        <router-link
                            exact-active-class="active"
                            to="/todo"
                            class="nav-item nav-link"
                            >Todo</router-link
                        >
                        <router-link
                            exact-active-class="active"
                            to="/chirp"
                            class="nav-item nav-link"
                            >Chirp</router-link
                        >
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <router-view></router-view>
        </div>
        <MDBFooter text="center" style="background-color: #f1f1f1">
            <!-- Grid container -->
            <MDBContainer class="pt-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                <!-- Facebook -->
                <a
                    class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="#!"
                    role="button"
                    v-mdb-ripple="{ color: 'dark' }"
                    ><MDBIcon iconStyle="fab" icon="facebook-f"></MDBIcon
                ></a>
                <!-- Twitter -->
                <a
                    class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="#!"
                    role="button"
                    v-mdb-ripple="{ color: 'dark' }"
                    ><MDBIcon iconStyle="fab" icon="twitter"></MDBIcon
                ></a>
                <!-- Google -->
                <a
                    class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="#!"
                    role="button"
                    v-mdb-ripple="{ color: 'dark' }"
                    ><MDBIcon iconStyle="fab" icon="google"></MDBIcon
                ></a>
                <!-- Instagram -->
                <a
                    class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="#!"
                    role="button"
                    v-mdb-ripple="{ color: 'dark' }"
                    ><MDBIcon iconStyle="fab" icon="instagram"></MDBIcon
                ></a>
                <!-- Linkedin -->
                <a
                    class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="#!"
                    role="button"
                    v-mdb-ripple="{ color: 'dark' }"
                    ><MDBIcon iconStyle="fab" icon="linkedin"></MDBIcon
                ></a>
                <!-- Github -->
                <a
                    class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="#!"
                    role="button"
                    v-mdb-ripple="{ color: 'dark' }"
                    ><MDBIcon iconStyle="fab" icon="github"></MDBIcon
                ></a>
                </section>
                <!-- Section: Social media -->
            </MDBContainer>
            <!-- Grid container -->
            <!-- Copyright -->
            <div
                class="text-center text-dark p-3"
                style="background-color: rgba(0, 0, 0, 0.2)"
            >
                © 2024 Copyright:
                <a class="text-dark" href="https://joneehubilla.com/"
                >Jonee</a
                >
            </div>
            <!-- Copyright -->
        </MDBFooter>
    </main>
</template>

<script>
import { MDBFooter, MDBContainer, MDBRow, MDBCol, MDBIcon, mdbRipple, MDBSpinner  } from 'mdb-vue-ui-kit';

export default {
  components: {
    MDBFooter,
    MDBContainer,
    MDBRow,
    MDBCol,
    MDBIcon,
    MDBSpinner
  },
  directives: {
    mdbRipple
  }
};
</script>
