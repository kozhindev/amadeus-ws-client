<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\HeaderV4;

/**
 * Security
 *
 * @package Amadeus\Client\Struct\HeaderV4
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class Security
{
    /**
     * @var UsernameToken
     */
    public $UsernameToken;

    /**
     * @param string $userName
     * @param string $password
     * @param string $nonce
     * @param string $created \DateTime formatted as yyyy-mm-ddTHH:MM:SS.sssZ
     */
    public function __construct($userName, $password, $nonce, $created)
    {
        $this->UsernameToken = new UsernameToken();

        $this->UsernameToken->Username = $userName;

        $passwordNode = '<Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wssusername-token-profile-1.0#PasswordDigest">'.$password.'</Password>';

        $this->UsernameToken->Password = new \SoapVar($passwordNode, XSD_ANYXML, null, null, null);

        /*$this->UsernameToken->Password = new \SoapVar(
            [
                '_' => $password,
                'Type' => 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordDigest'
            ],
            SOAP_ENC_OBJECT
        );*/

        $this->UsernameToken->Nonce = $nonce;

        $this->UsernameToken->Created = $created;
    }
}