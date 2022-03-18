<template>
    <Head title="Casting Of Vote" />
    <div class="header">
        <Link
            class="my-4 flex justify-end mr-8 font-semibold text-red-600 hover:text-red-500"
            :href="route('logout')"
            method="post"
        >
            Logout
        </Link>
    </div>
    <div class="head">
        <p class="text-center text-5xl mt-12">Polling System</p>
        <p class="text-center text-xl mt-2">
            Cast your vote for your favourite <b>Candidate</b>
        </p>
    </div>
    <div class="py-6">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 p-4">
            <!-- component -->
            <section class="antialiased text-gray-600 px-4">
                <div class="flex flex-col justify-center">
                    <!-- Table -->
                    <div
                        class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200"
                    >
                        <header class="px-5 py-4 border-b border-gray-100">
                            <h2 class="font-semibold text-gray-800">
                                Lists of Candidates
                            </h2>
                        </header>
                        <div class="p-3">
                            <div class="overflow-x-auto">
                                <table class="table-auto w-full">
                                    <thead
                                        class="text-xs font-semibold uppercase text-gray-400 bg-gray-50"
                                    >
                                        <tr>
                                            <th class="p-2 whitespace-nowrap">
                                                <div
                                                    class="font-semibold text-left"
                                                >
                                                    Name
                                                </div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
                                                <div
                                                    class="font-semibold text-left"
                                                ></div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
                                                <div
                                                    class="font-semibold text-left"
                                                ></div>
                                            </th>

                                            <th class="p-2 whitespace-nowrap">
                                                <div
                                                    class="font-semibold text-center"
                                                >
                                                    Total vote
                                                </div>
                                            </th>
                                            <th class="p-2 whitespace-nowrap">
                                                <div
                                                    class="font-semibold text-center"
                                                ></div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="text-sm divide-y divide-gray-100"
                                    >
                                        <tr v-for="n in 6" :key="n">
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <!-- <div
                                                        class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"
                                                    >
                                                        <img
                                                            class="rounded-full"
                                                            src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg"
                                                            width="40"
                                                            height="40"
                                                            alt="Alex Shatov"
                                                        />
                                                    </div> -->
                                                    <div
                                                        class="font-medium text-gray-800"
                                                    >
                                                        Alex Shatov
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-left"></div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div
                                                    class="text-left font-medium text-green-500"
                                                >
                                                    vote
                                                </div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div
                                                    class="text-lg text-center"
                                                >
                                                    40
                                                </div>
                                            </td>

                                            <td class="">
                                                <div
                                                    class="text-lg text-center"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 320 512"
                                                        class="w-5 h-5"
                                                    >
                                                        <path
                                                            d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"
                                                        />
                                                    </svg>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="my-4" />

            <div class="region px-5">
                <p class="text-2xl font-semibold">Available Regions</p>
                <p class="mt-2">
                    FCT State, Lagos State, Delta State, Edo State, ...
                </p>
            </div>
        </div>
    </div>
</template>

<script setup>
import BreezeAuthenticatedLayout from "@/Layouts/Authenticated.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
</script>

<style></style>
