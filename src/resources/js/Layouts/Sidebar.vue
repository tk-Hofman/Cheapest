<template>
    <aside class="sidebar">
        <ul class="sidebar-list">
            <li v-for="item in menuItems" :key="item" class="sidebar-item">
                {{ item }}
            </li>
        </ul>
    </aside>
</template>

<script>
export default {
    name: "Sidebar",
    data() {
        return {
            menuItems: [
                "登録商品一覧",
                "商品追加",
                "通知先設定",
                "ユーザー情報",
                "料金プラン",
                "お問い合わせ"
            ],
        };
    },
};
</script>


<style src="../../css/sidebar.css"></style>
