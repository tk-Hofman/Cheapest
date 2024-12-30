<template>
    <div class="main-layout">
        <div class="main-content">
            <Header />
            <Sidebar />
            <div class="content">
                <h1>メインコンテンツエリア</h1>
            </div>
        </div>
    </div>
</template>

<script>
import Header from '../Layouts/Header.vue';
import Sidebar from '../Layouts/Sidebar.vue';

export default {
    components: {
        Header,
        Sidebar,
    },
};
</script>