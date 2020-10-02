<template>
<div id="app">
    <div>
        <h3>クライアント一覧</h3>
    </div>
    <div>
        <span>会社名</span>
        <input type="text" v-model="searchCompany" placeholder="会社名">

        <span>担当者名</span>
        <input type="text" v-model="searchResponsible" placeholder="担当者名"> <br>

        <span>担当コンサルタント</span>
        <input type="text" v-model="searchConsultant" placeholder="担当コンサルタント">
    </div>
    <div>
        <input type="submit" name="submit" value="検索"> <br>
        <input type="submit" name="submit" value="新規作成">
    </div>
    <div><p>Hello</p></div>
</div>

</template>
