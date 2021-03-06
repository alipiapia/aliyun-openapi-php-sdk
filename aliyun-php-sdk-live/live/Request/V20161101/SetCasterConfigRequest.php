<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace live\Request\V20161101;

class SetCasterConfigRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("live", "2016-11-01", "SetCasterConfig");
		$this->setMethod("POST");
	}

	private  $urgentMaterialId;

	private  $transcodeConfig;

	private  $delay;

	private  $securityToken;

	private  $casterName;

	private  $casterId;

	private  $domainName;

	private  $ownerId;

	private  $version;

	private  $recordConfig;

	public function getUrgentMaterialId() {
		return $this->urgentMaterialId;
	}

	public function setUrgentMaterialId($urgentMaterialId) {
		$this->urgentMaterialId = $urgentMaterialId;
		$this->queryParameters["UrgentMaterialId"]=$urgentMaterialId;
	}

	public function getTranscodeConfig() {
		return $this->transcodeConfig;
	}

	public function setTranscodeConfig($transcodeConfig) {
		$this->transcodeConfig = $transcodeConfig;
		$this->queryParameters["TranscodeConfig"]=$transcodeConfig;
	}

	public function getDelay() {
		return $this->delay;
	}

	public function setDelay($delay) {
		$this->delay = $delay;
		$this->queryParameters["Delay"]=$delay;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getCasterName() {
		return $this->casterName;
	}

	public function setCasterName($casterName) {
		$this->casterName = $casterName;
		$this->queryParameters["CasterName"]=$casterName;
	}

	public function getCasterId() {
		return $this->casterId;
	}

	public function setCasterId($casterId) {
		$this->casterId = $casterId;
		$this->queryParameters["CasterId"]=$casterId;
	}

	public function getDomainName() {
		return $this->domainName;
	}

	public function setDomainName($domainName) {
		$this->domainName = $domainName;
		$this->queryParameters["DomainName"]=$domainName;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getVersion() {
		return $this->version;
	}

	public function setVersion($version) {
		$this->version = $version;
		$this->queryParameters["Version"]=$version;
	}

	public function getRecordConfig() {
		return $this->recordConfig;
	}

	public function setRecordConfig($recordConfig) {
		$this->recordConfig = $recordConfig;
		$this->queryParameters["RecordConfig"]=$recordConfig;
	}
	
}