package com.group14.irecycle.repository;

import org.springframework.data.repository.CrudRepository;
import org.springframework.stereotype.Repository;

import com.group14.irecycle.model.PastListing;

@Repository
public interface PastListingRepository extends CrudRepository <PastListing, Long> {

	
}
