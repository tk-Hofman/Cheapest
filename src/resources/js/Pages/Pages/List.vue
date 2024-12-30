<template>
    <div class="list-container">
      <div class="search-section">
        <input
          type="text"
          v-model="searchQuery"
          placeholder="検索"
          class="search-box"
        />
        <button @click="search" class="search-button">検索</button>
      </div>
  
      <table class="table">
        <thead>
          <tr>
            <th>商品名</th>
            <th>JANコード</th>
            <th>最安地</th>
            <th>サイト</th>
            <th>登録日</th>
            <th>更新日</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(item, index) in filteredData" :key="index">
            <td>{{ item.productName }}</td>
            <td>{{ item.janCode }}</td>
            <td>{{ item.price }}</td>
            <td>{{ item.site }}</td>
            <td>{{ item.createdAt }}</td>
            <td>{{ item.updatedAt }}</td>
            <td class="delete-td"><button @click="search" class="delete-button">削除</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        searchQuery: "",
        tableData: [
          {
            productName: "商品A",
            janCode: "4971234567890",
            price: 1100,
            site: "Amazon",
            updatedAt: "2023/12/31",
            createdAt: "2022/01/01",
          },
          {
            productName: "商品A",
            janCode: "4971234567890",
            price: 1100,
            site: "Amazon",
            updatedAt: "2023/12/31",
            createdAt: "2022/01/01",
          },
          {
            productName: "商品A",
            janCode: "4971234567890",
            price: 1100,
            site: "Amazon",
            updatedAt: "2023/12/31",
            createdAt: "2022/01/01",
          },
        ],
      };
    },
    computed: {
      filteredData() {
        if (!this.searchQuery) {
          return this.tableData;
        }
        return this.tableData.filter((item) =>
          Object.values(item).some((value) =>
            String(value).includes(this.searchQuery)
          )
        );
      },
    },
    methods: {
      search() {
        console.log("検索クエリ:", this.searchQuery);
      },
    },
  };
  </script>
  
  <style src="../../../css/list.css"></style>