<?php
/*
 * Copyright 2010 Google Inc.
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
 */

/**
 * The Diacritize service implementation
 *
 * Generated by http://code.google.com/p/google-api-php-client/
 * Generated from: http://www.googleapis.com/discovery/0.1/describe?api=diacritize&apiVersion=v1
 **/
class apiDiacritizeService {

  // Variables that the apiServiceResource implementation depends on
  private $serviceName = 'diacritize';
  private $version = 'v1';
  private $baseUrl = 'https://www.googleapis.com/';
  private $io;
  // apiServiceResource's that are used internally
  private $corpus;

  /**
   * Constructs the internal service representations and does the auto-magic configuration required to drive them
   */
  public function __construct(apiClient $apiClient) {
    $this->io = $apiClient->getIo();
    $this->corpus = new apiServiceResource($this, $this->serviceName, 'corpus', json_decode('{"methods":{"get":{"pathUrl":"language\/diacritize\/v1","rpcName":"language.diacritize.corpus.get","httpMethod":"GET","methodType":"rest","parameters":{"message":{"parameterType":"query","required":false},"last_letter":{"parameterType":"query","required":false},"lang":{"parameterType":"query","required":false}}}}}', true));
  }

  /**
   * Implementation of the language.diacritize.corpus.get method.
   * See: http://code.google.com/apis/buzz/v1/using_rest.html#language.diacritize.corpus.get
   *
   * @param $message optional
   * @param $last_letter optional
   * @param $lang optional
   */
  public function getCorpus($message = null, $last_letter = null, $lang = null) {
    return $this->corpus->__call('get', array(array('message' => $message, 'last-letter' => $last_letter, 'lang' => $lang)));
  }

  /**
   * @return the $io
   */
  public function getIo() {
    return $this->io;
  }

  /**
   * @param $io the $io to set
   */
  public function setIo($io) {
    $this->io = $io;
  }

  /**
   * @return the $version
   */
  public function getVersion() {
    return $this->version;
  }

  /**
   * @return the $baseUrl
   */
  public function getBaseUrl() {
    return $this->baseUrl;
  }

  /**
   * @param $version the $version to set
   */
  public function setVersion($version) {
    $this->version = $version;
  }

  /**
   * @param $baseUrl the $baseUrl to set
   */
  public function setBaseUrl($baseUrl) {
    $this->baseUrl = $baseUrl;
  }

}
