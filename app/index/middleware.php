<?php

return [
    //跨域请求支持
    \think\middleware\AllowCrossDomain::class,
    //全局请求缓存
    //\think\middleware\CheckRequestCache::class,
    // 多语言加载
    \think\middleware\LoadLangPack::class,
    // Session初始化
    \think\middleware\SessionInit::class,
    //表单令牌
    //\think\middleware\FormTokenCheck::class,
];