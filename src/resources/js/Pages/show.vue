<template>
    <div class="main-layout">
      <Header />
      <div class="main-content">
        <div class="sidebar-wrapper">
          <Sidebar />
        </div>
        <div class="content-wrapper">
          <!-- 動的にタイトルを表示 -->
          <h1 class="page-title">{{ pageTitle }}</h1>
          <!-- 動的にコンポーネントをレンダリング -->
          <component :is="resolvedComponent" />
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import Header from "../Layouts/Header.vue";
  import Sidebar from "../Layouts/Sidebar.vue";
  import { defineAsyncComponent, markRaw } from "vue";
  
  export default {
    props: {
      component: {
        type: String,
        required: true, // ルートからコンポーネント名を受け取る
      },
    },
    components: {
      Header,
      Sidebar,
    },
    data() {
      return {
        resolvedComponent: null, // 動的コンポーネントの結果を格納
      };
    },
    computed: {
        pageTitle() {
        // コンポーネント名に応じてタイトルを変更
        const titlesMap = {
          "Pages/List": "登録商品一覧", // List の場合
          // 他のコンポーネントがあればここに追加
        };
        return titlesMap[this.component] || "デフォルトタイトル"; // デフォルト値
      },
    },
    watch: {
      component: {
        immediate: true,
        handler(newComponent) {
          this.loadComponent(newComponent); // プロパティ変更時にコンポーネントをロード
        },
      },
    },
    methods: {
      loadComponent(componentName) {
        // コンポーネントを動的に解決
        const componentsMap = {
          "Pages/List": markRaw(
            defineAsyncComponent(() => import("./Pages/List.vue"))
          ), // Pages/List.vue を動的ロード
        };
  
        this.resolvedComponent = componentsMap[componentName] || null; // マッチしない場合は null
      },
    },
  };
  </script>
  
  <style src="../../css/show.css"></style>
  