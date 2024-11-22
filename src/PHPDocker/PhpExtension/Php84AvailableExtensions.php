<?php
declare(strict_types=1);
/**
 * Copyright 2023 Luis Alberto Pabón Flores
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace App\PHPDocker\PhpExtension;

class Php84AvailableExtensions extends BaseAvailableExtensions
{
    /**
     * @inheritDoc
     * @return array<string, array<string, string[]>>
     */
    protected function getMandatoryExtensionsMap(): array
    {
        return [
            'cURL'     => ['packages' => ['php8.4-curl']],
            'MBSTRING' => ['packages' => ['php8.4-mbstring']],
            'OPCache'  => ['packages' => ['php8.4-opcache']],
            'Readline' => ['packages' => ['php8.4-readline']],
            'XML'      => ['packages' => ['php8.4-xml']],
            'Zip'      => ['packages' => ['php8.4-zip']],
        ];
    }

    /**
     * @inheritDoc
     * @return array<string, array<string, string[]>>
     */
    protected function getOptionalExtensionsMap(): array
    {
        return [
            'AMQP'                        => ['packages' => ['php8.4-amqp']],
            'AST'                         => ['packages' => ['php8.4-ast']],
            'Bcmath'                      => ['packages' => ['php8.4-bcmath']],
            'bzip2'                       => ['packages' => ['php8.4-bz2']],
            'CGI'                         => ['packages' => ['php8.4-cgi']],
            'DBA'                         => ['packages' => ['php8.4-dba']],
            'Decimal'                     => ['packages' => ['php8.4-decimal']],
            'DS (Data Structures)'        => ['packages' => ['php8.4-ds']],
            'Enchant'                     => ['packages' => ['php8.4-enchant']],
            'GD'                          => ['packages' => ['php8.4-gd']],
            'Gearman'                     => ['packages' => ['php8.4-gearman']],
            'Gmagick (GraphicsMagick)'    => ['packages' => ['php8.4-gmagick']],
            'GMP'                         => ['packages' => ['php8.4-gmp']],
            'GNUPG'                       => ['packages' => ['php8.4-gnupg']],
            'GRPC'                        => ['packages' => ['php8.4-grpc']],
            'HTTP'                        => ['packages' => ['php8.4-http']],
            'igbinary'                    => ['packages' => ['php8.4-igbinary']],
            'ImageMagick'                 => ['packages' => ['php8.4-imagick']],
            'IMAP'                        => ['packages' => ['php8.4-imap']],
            'Inotify'                     => ['packages' => ['php8.4-inotify']],
            'Interbase'                   => ['packages' => ['php8.4-interbase']],
            'Intl (Internationalisation)' => ['packages' => ['php8.4-intl']],
            'LDAP'                        => ['packages' => ['php8.4-ldap']],
            'LZ4'                         => ['packages' => ['php8.4-lz4']],
            'Mailparse'                   => ['packages' => ['php8.4-mailparse']],
            'MaxMind DB'                  => ['packages' => ['php8.4-maxminddb']],
            'mcrypt'                      => ['packages' => ['php8.4-mcrypt']],
            'Memcache'                    => ['packages' => ['php8.4-memcache']],
            'Memcached'                   => ['packages' => ['php8.4-memcached']],
            'MongoDB'                     => ['packages' => ['php8.4-mongodb']],
            'MessagePack'                 => ['packages' => ['php8.4-msgpack']],
            'MySQL'                       => ['packages' => ['php8.4-mysql']],
            'OAuth'                       => ['packages' => ['php8.4-oauth']],
            'ODBC'                        => ['packages' => ['php8.4-odbc']],
            'Pcov'                        => ['packages' => ['php8.4-pcov']],
            'PostgreSQL'                  => ['packages' => ['php8.4-pgsql']],
            'PHPDBG'                      => ['packages' => ['php8.4-phpdbg']],
            'Protobuf'                    => ['packages' => ['php8.4-protobuf']],
            'pspell'                      => ['packages' => ['php8.4-pspell']],
            'PSR'                         => ['packages' => ['php8.4-psr']],
            'raphf'                       => ['packages' => ['php8.4-raphf']],
            'Redis'                       => ['packages' => ['php8.4-redis']],
            'rrd'                         => ['packages' => ['php8.4-rrd']],
            'Samba Client'                => ['packages' => ['php8.4-smbclient']],
            'SNMP'                        => ['packages' => ['php8.4-snmp']],
            'SOAP'                        => ['packages' => ['php8.4-soap']],
            'Solr'                        => ['packages' => ['php8.4-solr']],
            'SQLite3'                     => ['packages' => ['php8.4-sqlite3']],
            'ssh2'                        => ['packages' => ['php8.4-ssh2']],
            'Swoole'                      => ['packages' => ['php8.4-swoole']],
            'Sybase'                      => ['packages' => ['php8.4-sybase']],
            'Tidy'                        => ['packages' => ['php8.4-tidy']],
            'UUID'                        => ['packages' => ['php8.4-uuid']],
            'vips'                        => ['packages' => ['php8.4-vips']],
            'Xdebug'                      => ['packages' => ['php8.4-xdebug']],
            'Xhprof'                      => ['packages' => ['php8.4-xhprof']],
            'XMLRPC'                      => ['packages' => ['php8.4-xmlrpc']],
            'XSL'                         => ['packages' => ['php8.4-xsl']],
            'Yac'                         => ['packages' => ['php8.4-yac']],
            'YAML'                        => ['packages' => ['php8.4-yaml']],
            'ZMQ (ZeroMQ)'                => ['packages' => ['php8.4-zmq']],
            'zstd (Zstandard)'            => ['packages' => ['php8.4-zstd']],
        ];
    }
}
