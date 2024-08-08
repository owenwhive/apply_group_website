<template>
    <div>
        <!-- form-section -->
        <section>
            <div class="container">
                <div
                    class="row justify-content-center"
                    style="margin-top: -5rem"
                >
                    <img
                        :src="'assets/images/map/Group 1.png'"
                        alt=""
                        style="z-index: -1"
                        class="position-absolute w-100 mt-5 d-none d-md-none d-lg-block"
                    />

                    <div class="col-12 col-lg-7 col-md-8">
                        <form
                            id="regForm "
                            class="px-3 py-4"
                            style="
                                background-color: #fafafa !important;
                                border-radius: 15px;
                                box-shadow: 0px 2px 10px #cacaca;
                            "
                        >
                            <div v-show="step == 0" class="tab_1">
                                <h3 class="font-md fw-bold">
                                    First of all, what should we call you ?
                                </h3>
                                <!-- business info -->
                                <p class="mb-0 font-s">
                                    Next, we’ll ask a few questions to help us
                                    match you with the best study programs !
                                </p>

                                <div>
                                    <div class="form-group mt-4 mb-4">
                                        <label
                                            for="form-businessname-input"
                                            class="form-label font-xs"
                                            >Your first name</label
                                        >
                                        <input
                                            type="text"
                                            v-model="user"
                                            class="form-control font-xs"
                                            id="form-businessname-input"
                                            placeholder="Ex: Hari Bahadur"
                                            v-on:keydown.enter.prevent="
                                                nextPrev(1)
                                            "
                                        />
                                    </div>
                                </div>
                            </div>


                        <div  v-show = "step == 1" class="tab_1 pb-3">
                            <div class="">


                                <div class="d-flex align-items-center">
                                    <div>

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                    </div>
                                    <span class="font-s">Hey {{ user }}</span>
                                </div>
                                <div class="px-2">

                                    <h3 class="font-md fw-bold">You are doing great {{ user }}  !!!
                                    </h3>
                                    <p class="mb-0 font-s">
                                        Next, we will ask you 6 - 8 questions to check your eligibility.
                                    </p>
                                </div>

                            </div>

                        </div>

                            <div
                                v-for="(q, index) in questions"
                                :key="index"
                                v-show="step == index + offsetStep && !post_status"
                                class="tab_1 pb-3"
                            >
                                <div class="">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <button
                                                type="button"
                                                class="btn font-xl p-0"
                                                id="prevBtn"
                                                @click="nextPrev(-1)"
                                            >
                                                <i
                                                    class="bi bi-arrow-left-short"
                                                ></i>
                                            </button>
                                            <span class="font-s"
                                                >Preference</span
                                            >
                                        </div>
                                        <div
                                            class="col-4 d-flex justify-content-end"
                                        >
                                            <button
                                                type="button"
                                                class="btn font-xl p-0"
                                                id="prevBtn"
                                                @click="nextPrev(-1)"
                                            >
                                                <i class="bi bi-x"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="px-2">
                                        <h3 class="font-md fw-bold">
                                            {{ q.question }}
                                        </h3>
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                v-model="answers[q.field_name]"
                                                value="1"
                                            />
                                            <label
                                                class="form-check-label font-s"
                                                for="flexCheckDefault"
                                            >
                                                USA
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                v-model="answers[q.field_name]"
                                                value="2"
                                            />
                                            <label
                                                class="form-check-label font-s"
                                                for="flexCheckDefault"
                                            >
                                                Canada
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                v-model="answers[q.field_name]"
                                                value=""
                                            />
                                            <label
                                                class="form-check-label font-s"
                                                for="flexCheckDefault"
                                            >
                                                UK
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                v-model="answers[q.field_name]"
                                                value=""
                                            />
                                            <label
                                                class="form-check-label font-s"
                                                for="flexCheckDefault"
                                            >
                                                Australia
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                value=""
                                            />
                                            <label
                                                class="form-check-label font-s"
                                                for="flexCheckDefault"
                                            >
                                                Default Ireland
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div v-if="post_status">
                                <h3 class="font-md fw-bold">
                                    Success
                                </h3>
                                <!-- business info -->
                                <p class="mb-0 font-s">
                                    thankyou for submitting!!!
                                </p>
                            </div>

                            <div style="overflow: auto" class="" v-if="!post_status">
                                <button
                                    :disabled="loading"
                                    type="button"
                                    class="btn btn-primary font-xs w-100"
                                    id="nextBtn"
                                    @click="nextPrev(1)"
                                >
                                    Next
                                </button>
                            </div>
                            <!-- Circles which indicates the steps of the form: -->
                            <div class="mt-2" style="text-align: center">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { ref, onMounted, watch } from "vue";
import axios from "axios";

const loading = ref(false);
const post_status = ref(false);
let offsetStep = 2;
const step = ref(0);
const user = ref("");
const answers = ref({});

let totalStep = 13;

let questions = ref({});

async function getQuestions() {
    let results = await axios
        .get("/questionset")

        .then((response) => {
            console.log(response.data);
            questions = response.data.questions;
            totalStep = questions.length + offsetStep ;

            questions.forEach(async (q) => {
                if (q["answer_type"] == "checkbox") {
                    answers.value[q.field_name] = [];
                } else if (q["answer_type"] == "radio") {
                    answers.value[q.field_name] = "";
                } else {
                    answers.value[q.field_name] = "";
                }
            });
        })
        .catch((error) => {
            console.log(error);
        });
}

async function submitAnswers() {
    loading.value = true;

    console.log("submitting");
    let results = await axios
        .post("/postOnboarding", {
            user:user.value,
            answers: answers.value,
        })
        .then((res) => {
            console.log(res.data);
            post_status.value = true;
            loading.value = false;
        })
        .catch((error) => {
            console.log(error);
            post_status.value = false;

            loading.value = false;
        });
}

onMounted(() => {
    getQuestions();
});

function nextPrev(inc = 0) {
    if (step.value == 0) {
        if (user.value == "" || user.value == null) {
            return;
        }
    }

    if (step.value + inc >= totalStep) {
        submitAnswers();
        return;
    }

    if (step.value + inc < 0) {
        return;
    } else {
        step.value = step.value + inc;
    }
}
</script>
