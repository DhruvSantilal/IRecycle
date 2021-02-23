package com.group14.irecycle.repository;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import com.group14.irecycle.model.Address;

@Repository
public interface AddressRepository extends CrudRepository <Address, Long> {

	
}
