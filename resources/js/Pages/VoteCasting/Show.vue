<template>
    <div class="">
        <div class="head">
            <p class="text-center text-4xl mt-12">{{ candidate.name }} Votes</p>
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
                                    <Link
                                        class="flex hover:text-gray-400"
                                        :href="route('vote.casting')"
                                    >
                                        <svg
                                            fill="currentColor"
                                            class="w-5 h-5 my-auto"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 320 512"
                                        >
                                            <path
                                                d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"
                                            />
                                        </svg>
                                        <span>Back</span>
                                    </Link>
                                </h2>
                            </header>
                            <div class="p-3">
                                <div class="overflow-x-auto">
                                    <table class="table-auto w-full">
                                        <thead
                                            class="text-xs font-semibold uppercase text-gray-400 bg-gray-50"
                                        >
                                            <tr>
                                                <th
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="font-semibold text-left"
                                                    >
                                                        State
                                                    </div>
                                                </th>
                                                <th
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="font-semibold text-left"
                                                    ></div>
                                                </th>
                                                <th
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="font-semibold text-left"
                                                    ></div>
                                                </th>
                                                <th
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="font-semibold text-left"
                                                    >
                                                        Votes
                                                    </div>
                                                </th>

                                                <th
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="font-semibold text-center"
                                                    >
                                                        Status
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            class="text-sm divide-y divide-gray-100"
                                        >
                                            <tr v-for="vote in candidate.votes" :key="vote.id">
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="flex items-center"
                                                    >
                                                        <div
                                                            class="font-medium text-gray-800"
                                                        >
                                                            {{ vote.region }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="text-left"
                                                    ></div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="text-left"
                                                    ></div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="text-left font-medium text-green-500"
                                                    >
                                                        {{  }}
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="text-lg text-center"
                                                    >
                                                        <span
                                                            class="text-red-600 bg-red-200 px-1 text-sm rounded"
                                                            >inprogress</span
                                                        >
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
                    <p class="text-xl font-semibold">
                        Total Votes :
                        <span class="font-weight-normal text-lg">120</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";

defineProps({
    'candidate': Array
})
</script>

<style></style>
