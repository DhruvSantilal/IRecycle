package com.group14.irecycle.repository;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import com.group14.irecycle.model.Listing;

@Repository
public interface ListingRepository extends CrudRepository <Listing, Long> {

	
}
