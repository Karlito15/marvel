<?php

namespace Karlito\ThirdParty;

enum Marvel
{
    case Colossus;
    case Deadpool;
    case Fatalis;
    case Galactus;
    case Hela;
    case Kang;
    case Loki;
    case Mephisto;
    case Onslaught;
    case Surtur;
    case Thanos;
    case Ultron;

    public function getDevUrl(): string
    {
        return match($this) {
            Marvel::Colossus  => 'http://colossus.ci/',
            Marvel::Deadpool  => 'http://deadpool.ci/',
            Marvel::Fatalis   => 'http://fatalis.ci/',
            Marvel::Galactus  => 'http://galactus.ci/',
            Marvel::Hela      => 'http://hela.ci/',
            Marvel::Kang      => 'http://kang.ci/',
            Marvel::Loki      => 'http://loki.ci/',
            Marvel::Mephisto  => 'http://mephisto.ci/',
            Marvel::Onslaught => 'http://onslaught.ci/',
            Marvel::Surtur    => 'http://surtur.ci/',
            Marvel::Thanos    => 'http://thanos.ci/',
            Marvel::Ultron    => 'http://ultron.ci/',
        };
    }

    public function getProdUrl(): string
    {
        return match($this) {
            Marvel::Colossus  => 'http://colossus.prod/',
            Marvel::Deadpool  => 'http://deadpool.prod/',
            Marvel::Fatalis   => 'http://fatalis.prod/',
            Marvel::Galactus  => 'http://galactus.prod/',
            Marvel::Hela      => 'http://hela.prod/',
            Marvel::Kang      => 'http://kang.prod/',
            Marvel::Loki      => 'http://loki.prod/',
            Marvel::Mephisto  => 'http://mephisto.prod/',
            Marvel::Onslaught => 'http://onslaught.prod/',
            Marvel::Surtur    => 'http://surtur.prod/',
            Marvel::Thanos    => 'http://thanos.prod/',
            Marvel::Ultron    => 'http://ultron.prod/',
        };
    }
}
