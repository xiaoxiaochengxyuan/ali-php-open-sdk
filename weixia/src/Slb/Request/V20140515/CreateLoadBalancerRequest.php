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
namespace Aliyun\Slb\Request\V20140515;

use Aliyun\Core\RpcAcsRequest;

class CreateLoadBalancerRequest extends RpcAcsRequest
{
    public function __construct()
    {
        parent::__construct("Slb", "2014-05-15", "CreateLoadBalancer");
    }

    private $ownerId;

    private $resourceOwnerAccount;

    private $resourceOwnerId;

    private $addressType;

    private $internetChargeType;

    private $bandwidth;

    private $clientToken;

    private $loadBalancerName;

    private $vpcId;

    private $vSwitchId;

    private $ownerAccount;

    public function getOwnerId()
    {
        return $this->ownerId;
    }

    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        $this->queryParameters["OwnerId"] = $ownerId;
    }

    public function getResourceOwnerAccount()
    {
        return $this->resourceOwnerAccount;
    }

    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->resourceOwnerAccount = $resourceOwnerAccount;
        $this->queryParameters["ResourceOwnerAccount"] = $resourceOwnerAccount;
    }

    public function getResourceOwnerId()
    {
        return $this->resourceOwnerId;
    }

    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->resourceOwnerId = $resourceOwnerId;
        $this->queryParameters["ResourceOwnerId"] = $resourceOwnerId;
    }

    public function getAddressType()
    {
        return $this->addressType;
    }

    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
        $this->queryParameters["AddressType"] = $addressType;
    }

    public function getInternetChargeType()
    {
        return $this->internetChargeType;
    }

    public function setInternetChargeType($internetChargeType)
    {
        $this->internetChargeType = $internetChargeType;
        $this->queryParameters["InternetChargeType"] = $internetChargeType;
    }

    public function getBandwidth()
    {
        return $this->bandwidth;
    }

    public function setBandwidth($bandwidth)
    {
        $this->bandwidth = $bandwidth;
        $this->queryParameters["Bandwidth"] = $bandwidth;
    }

    public function getClientToken()
    {
        return $this->clientToken;
    }

    public function setClientToken($clientToken)
    {
        $this->clientToken = $clientToken;
        $this->queryParameters["ClientToken"] = $clientToken;
    }

    public function getLoadBalancerName()
    {
        return $this->loadBalancerName;
    }

    public function setLoadBalancerName($loadBalancerName)
    {
        $this->loadBalancerName = $loadBalancerName;
        $this->queryParameters["LoadBalancerName"] = $loadBalancerName;
    }

    public function getVpcId()
    {
        return $this->vpcId;
    }

    public function setVpcId($vpcId)
    {
        $this->vpcId = $vpcId;
        $this->queryParameters["VpcId"] = $vpcId;
    }

    public function getVSwitchId()
    {
        return $this->vSwitchId;
    }

    public function setVSwitchId($vSwitchId)
    {
        $this->vSwitchId = $vSwitchId;
        $this->queryParameters["VSwitchId"] = $vSwitchId;
    }

    public function getOwnerAccount()
    {
        return $this->ownerAccount;
    }

    public function setOwnerAccount($ownerAccount)
    {
        $this->ownerAccount = $ownerAccount;
        $this->queryParameters["OwnerAccount"] = $ownerAccount;
    }
}
